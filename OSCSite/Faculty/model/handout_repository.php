<?php
class HandoutRepository 
{
    public static function getHandouts($week) 
    {
        $db = DBConnect::getDB();
        $query = "SELECT * FROM handout "
                ."WHERE `h_week_id` = 'week$week'";
        
        $result = $db->query($query);
        foreach ($result as $row) 
        {         
            $hand = new Handout($row['h_week_id'],$row['material']);          
        }
        return $hand;
    }
    public static function setWeekIHandout($week, $material) 
    {
        $db = DBConnect::getDB();
        $query ="UPDATE handout SET material = '$material' WHERE h_week_id = 'week$week';";
        $row_count = $db->exec($query);
        print_r('Handout Submited for Week'.$week);
        return $row_count;
    }
}
?>