	<?php
require_once 'php/init.php';




class marks
{
 	
 private $_db=null,
		 $_results,
		 $_count;

 public function __construct($id=null)
 {

 	$this->_db=db::getInstance();

 	if(!is_null($id))
 	{
 		$this->find($id);
 	}

 }


 public function addProd($fields = array())
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
	 $query="INSERT into marks_and_attendance (`" . implode('` , `', $keys) . "`) VALUES ({$values}) ";
	 echo $query;
	if(!$this->_db->setquery($query)->error())
	{
	session::flash('marks','Marks Entered !');
	header('location: markentry.php');
	}
 }


 public function update($fields,$id)
 {
     $set='';
     $where='';
     $y=1;
     //echo count($fields);
     foreach ($fields as $name => $value) {

         $set.="`{$name}` = '{$value}' ";
         if($y<count($fields))
         {
             $set.=", ";
         }
         $y++;
     }
     $y=1;
     foreach ($id as $key => $value) {
        $where.="`{$key}` = '{$value}' ";
        if($y<count($id))
        {
            $where.="AND ";
        }
        $y++;
     }

      $query= "UPDATE marks_and_attendance SET {$set} WHERE {$where}";
  	echo $query;
     if(!$this->_db->setquery($query)->error())
     {
        session::flash('marks','marks entered !');
        header('location: markentry.php');
         return true;
         
     }
     return false;
 }

public function search($filters= array())
{
       $sub2=array_keys($filters);
		
		$sub1 = '';
		$x=0;
		foreach ($filters as $value) {
			if($x<count($filters)-1)
			{
				if(is_numeric($value))
				{
				$sub1.= $sub2[$x].' = '. $value .' AND ';
				}
				else
				{
					$sub1.= $sub2[$x].' LIKE '." '%".$value."%' " .' AND ';
				}	
							
			}
			else
			{
				if(is_numeric($value))
				{
				$sub1.= $sub2[$x].' = '. $value ;
				}
				else
				{
					$sub1.= $sub2[$x].' LIKE '." '%".$value."%' ";
				}	
		    }
			$x++;	

		}
		    $query = "SELECT * FROM marks_and_attendance WHERE {$sub1}";


		$searchResults = $this->_db->setquery($query);

		if($searchResults->count())
		{
			$this->_results=$searchResults->results();
			$this->_count=$searchResults->count();
			return true;
		}
			return false;
		
	
	
}

	public function results()
	{
		return $this->_results;
	}

	public function find($id)
	{
		$query = "SELECT * FROM marks_and_attendance WHERE roll_no='{$id}'";
		$searchResults =$this->_db->setquery($query);
		if($searchResults->count())
		{
			$this->_results=$searchResults->results();
			return true;
		}
		
			return false;
		
	
	}

	public function	 delete($id)
	{
			$query="DELETE FROM products WHERE prod_id={$id} ";

			$result=$this->_db->setquery($query);
			if($result->count())
			{
				return true;
			}
			return false;
	}

    public function allStudents($subj_id)
    {   
        $sql = "SELECT DISTINCT student_data.roll_no, student_data.name, student_data.division, marks_and_attendance.ut1_marks,marks_and_attendance.ut2_marks,marks_and_attendance.category\n"

    . "from student_data ,marks_and_attendance,subject_data\n"

    . "where student_data.roll_no=marks_and_attendance.roll_no and marks_and_attendance.subject_id=".$subj_id." order by student_data.division";

        $result =$this->_db->setquery($sql);
        if($result->count())
        {
            $this->_results=$result->results();
            return true;
        }

        return false;

    }


}


?>
