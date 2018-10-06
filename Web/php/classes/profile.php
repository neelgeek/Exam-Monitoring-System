<?php

class profile
{
    private $_data,
    $_db;

    public function __construct($table,$field,$id)
    {
        $this->_db = db::getInstance();
        $this->getInfo($table,$field,$id);
    }


    public function getInfo($table,$field,$id)
    {
        $data=$this->_db->getData($table,array($field=>$id));
		if($data->count())
		{
			$this->_data=$data->results()[0];
		}
    }

    public function data(){
        return $this->_data;
    }


}
?>