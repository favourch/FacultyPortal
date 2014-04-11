<?php
class Attendance 
{
    private $sid,$photo,$lname,$fname,$week=array();
    public function __construct($sid,$photo,$lname,$fname, $week=array())
    {
        $this->sid = $sid;
        $this->photo = $photo;
        $this->lname = $lname;
        $this->fname = $fname;
        foreach($week as  $value)
        {
            $this->week[]= $value;
        }
    }    
    public function getSID() 
    {
        return $this->sid;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getLname() 
    {
        return $this->lname;
    }
    public function getFname() 
    {
        return $this->fname;
    }
    public function getWeek($weekSelected)
    {
        if( is_null($this->week[$weekSelected -1]))
        {
            return ;
        }
        else if( $this->week[$weekSelected -1] == 0)
        {
         return "P";
        }
        else if( $this->week[$weekSelected -1] == 1)
        {
         return "A";
        }
        else if( $this->week[$weekSelected -1] == 2)
        {
         return "E";
        }
        else if( $this->week[$weekSelected -1] == 3)
        {
            return "L";
        }
    }
    public function setSID($sid) 
    {
        $this->sid = $sid;
    }
    public function setWeekI($index,$value) 
    {
        $this->week[$index] = $value;
    }
}
?>
