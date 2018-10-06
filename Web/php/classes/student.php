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
        $this->_data=$this->_db->getData('student_data',array('user_id'=>$id));
    }

    public function data(){
        return $this->_data;
    }


}
?>