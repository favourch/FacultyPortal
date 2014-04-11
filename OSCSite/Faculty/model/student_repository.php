<?php
class StudentRepository 
{
    public static function getStudents() 
    {
        $db = DBConnect::getDB();
        $query = "SELECT * FROM student ORDER BY sid";
        $result = $db->query($query);
        $students = array();
        foreach ($result as $row) 
        {          
            $student = new Student($row['sid'], $row['lname'], $row['fname']);
            $students[] = $student;
        }
        return $students;
    }
}
  