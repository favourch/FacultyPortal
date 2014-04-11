<?php

class Student
{
    private $sid;
    private $photo;
    private $lname;
    private $fname;
    
    public function __construct($sid,$photo, $lname,$fname) {
        $this->sid = $sid;
        $this->photo = $photo;
        $this->lname = $lname;
        $this->fname = $fname;   
    }
    public function getSID() {
        return $this->sid;
    }
    public function getPhoto() {
        return $this->photo;
    }
    public function getLName() {
        return $this->lname;
    }
    public function getFName() {
        return $this->fname;
    }
    
    public function setSID($sid) {
        $this->sid = $sid;
    }
    public function setLName($lname) {
        $this->lname = $lname;
    }
    public function setFName($fname) {
        $this->fname = $fname;
    }
}
?>