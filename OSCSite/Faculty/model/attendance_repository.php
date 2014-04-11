<?php
class AttendanceRepository 
{
    public static function getAttendance() 
    {
        $db = DBConnect::getDB();
        $query = "SELECT `student`.`photo` ,`student`.`lname` , `student`.`fname` , `attendance` . *
                    FROM `student`
                    LEFT JOIN `attendance` ON `student`.`sid` = `attendance`.`sid` ;";
        $result = $db->query($query);
        $attendances = array();
        foreach ($result as $row) 
        {          
            $attendance = new Attendance($row['sid'],$row['photo'],$row['lname'],$row['fname'],array($row['week1'],$row['week2'],$row['week3'],$row['week4'],$row['week5'],$row['week6'],$row['week7'],$row['week8'],$row['week9'],$row['week10'],$row['week11'],$row['week12'],$row['week13'],$row['week14'],$row['week15']));
            $attendances[] = $attendance;            
        }
        return $attendances;
    }
    public static function setWeekIAttendance($sid,$week, $avalue) 
    {
        $db = DBConnect::getDB();
        $query =" UPDATE attendance SET week$week  = $avalue WHERE attendance.sid ='$sid'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
  ?>