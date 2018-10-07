<?php

class user
{
private $_db,
$_isLoggedIn,
$_data;

public function __construct()
{
$this->_db = db::getInstance();

	if(session::exists('user'))
	{	

		$user= session::get('user');
		if($this->find($user))
		{
		$this->_isLoggedIn = true;
		}
		else
		{
			$this->logout();
		}
	}

}

public function register($table,$fields)
{	
	$query='';
	$keys = array_keys($fields);
	$values='';
	$x=1;
	foreach ($fields as $field) {
		if($x<count($fields))
		{
		$values.="'".$field."'".',';
		}
		else
		{
			$values.="'".$field."'";
		}
		$x++;
	}
	$query="INSERT into {$table} (`" . implode('` , `', $keys) . "`) VALUES ({$values}) ";


	if(!$this->_db->setquery($query)->error())
	{
	session::flash('home','User Registered Successfully ! You may now Login');
	//header('location: index.php');
	echo "User Added";
	}
}

	public function find($username)
	{
		$data=$this->_db->getData('users',array('user_id'=>$username));
		if($data->count())
		{
			$this->_data=$data->results()[0];
			return true;
		}
		return false;
	}

	public function login($username,$pass)
	{
			$log_data= $this->_db->getData('users',array(
     		'user_id'=>$username
     		));
     	if(!$log_data->error())
     	{
     		if($log_data->count()===1)
     		{
     			$user_info =$log_data->results()[0];
     			if($user_info->password===$pass)
     			{
					session::put('user',$user_info->user_id);
					switch ($user_info->role) {

						case '0':
							header('location: student.php');
							break;
						
						case '1':
							header('location: prof.php');
							break;
							
						case '2':
							header('location: parent.php');
							break;
						
						case '3':
							header('location: hod.php');
							break;
						
						case '-1':
							header('location: admin.php');
							break;
						default:
							# code...
							break;
					}
     				
     			}
     			else
     			{
     				echo "Wrong Pass<br>";

     			}
     		}
     		else
     	{
     		echo "Username Dosent Exists !";
     	}
     	}

	}

	public function IsLoggedIn()
	{
		return $this->_isLoggedIn;
	}

	public function logout()
	{
		session::delete('user');
	}

	public function data()
	{
		return $this->_data;
	}

	public function update($fields,$filter,$id,$table)
	{
		$set='';
		$y=1;
		//echo count($fields);
		foreach ($fields as $name => $value) {

			$set.="{$name} = '{$value}' ";
			if($y<count($fields))
			{
				$set.=", ";
			}
			$y++;
		}

		 $query= "UPDATE {$table} SET {$set} WHERE {$filter} = '{$id}'";
		$res = $this->_db->setquery($query);
		if(!$res->error())
		{
			
			$this->_data = $res->results();
			return true;
			
		}
		return false;
	}
}

?>