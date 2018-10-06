<?php

class student
{
    private $_data,
    $_db;

    public function __construct($id)
    {
        $this->_db = db::getInstance();
        $this->getInfo($id);
    }


    public function getInfo($id)
    {
        $data=$this->_db->getData('student_data',array('roll_no'=>$id));
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