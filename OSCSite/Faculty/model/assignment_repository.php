<?php
class AssignmentRepository 
{
    public static function getAssignment($week) 
    {
        $db = DBConnect::getDB();
        $query = "SELECT * FROM `assignment`"
                ."WHERE `assignment_id` = 'week$week'";
        
        $result = $db->query($query);
        foreach ($result as $row) 
        {          
            $assign = new Assignment($row['assignment_id'],$row['question'],$row['total_marks'],$row['due_date']);          
        }
        return $assign;
    }
    public static function setWeekIAssignment($week, $question,$marks,$due_date) 
    {
        $db = DBConnect::getDB();
        $query ="UPDATE assignment SET question='$question',total_marks=$marks,due_date='$due_date' WHERE assignment_id='week$week';";
        $row_count = $db->exec($query);
        print_r('Assignment Submited for Week'.$week);
        return $row_count;
    }
}
?>