<!DOCTYPE html>
 <?php
require('../model/db_connect.php');
require('../model/attendance.php');
require('../model/attendance_repository.php');
   $attendances= AttendanceRepository::getAttendance();
    if(isset($_POST['sweek'])){$weekSelected=$_POST['sweek'];}
    else{ $weekSelected=$_POST['weekSel'];}
    
    $r = 0;
    foreach ($attendances as $attendance) 
    {   
        if(isset($_POST['att'.$r]))
        {
           $attendances= AttendanceRepository::setWeekIAttendance($attendance->getSID(), $weekSelected,$_POST['att'.$r]);
           $sucess = 1;
        }
        $r++;
    }
    if(isset($sucess)) {  print_r('Attendance Submited for Week'.$weekSelected);}
?>
<html>
    <head>
        <link href="../../style.css" rel="stylesheet" type="text/css" >
        <title></title>
    </head>
    <body>
        <header>
            <svg class="absolute-center" width='300' height='81'>
                <rect width='300' height='81'/>
            </svg>
            <h2>Student's Attendance</h2>
        </header>
        <form method="post" action="attendance_page.php">
            <input type="hidden" value="<?php echo $weekSelected?>" name="weekSel">
            <p>Attendance Record for Week <?php echo $weekSelected?></p>
            <table >
                <thead>
                    <tr>
                        <th width="10%">SID</th>
                        <th width="15%">Photo</th>
                        <th width="40%">Name</th>
                        <th width="35%">Week <?php echo $weekSelected;?></th>
                    </tr>                    
                </thead>
                <tbody>
                <?php 
                    $x=0;
                    $attendances= AttendanceRepository::getAttendance();
                    foreach ($attendances as $attendance) :
                        
                ?>
                    <tr>
                        <td><?php echo $attendance->getSID(); ?></td>
                        <td><input type ="image" src = '<?php echo $attendance->getPhoto() ?>'/></td>
                        <td><?php echo $attendance->getLname().','.$attendance->getFname(); ?></td>
                        <td>
                          
                            <?php $att = $attendance->getWeek($weekSelected);?>
                            
                            <input type="radio" name="<?php echo 'att'.$x ;?>"
                            <?php 
                            if (!is_null($att) && $att=="P"){ echo "checked";}?>
                            accept=""value='0'>P
                            
                            <input type="radio" name="<?php echo 'att'.$x ;?>"
                            <?php 
                            if (!is_null($att) && $att=="A"){ echo "checked";}?>
                            accept=""value='1'>A
                            
                            <input type="radio" name="<?php echo 'att'.$x ;?>"
                            <?php 
                            if (!is_null($att) && $att=="E"){ echo "checked";}?>
                            accept=""value='2'>E
                            
                            <input type="radio" name="<?php echo 'att'.$x ;?>"  
                            <?php
                            if (!is_null($att) &&$att=="L"){ echo "checked";}?>
                            accept=""value='3'>L
                        </td>
                    </tr>
                    
                     
                     <?php $x++;endforeach; ?>
                    </tbody>
            </table>
            </br>
            <input type='submit' value='Submit Attendance' id="submit"/>
        </form>
        <p>(P) present,(A) absent, (E) leaving early, and (L) come late.</p>
        <br/>
        <p><a href= '../view/faculty_home_page.php' >Faculty Home page</a></p>
    </body>
</html>
