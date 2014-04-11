<!DOCTYPE html>
 <?php
require('../model/db_connect.php');
require('../model/assignment.php');
require('../model/assignment_repository.php');
 
if(isset($_POST['sweek'])){$weekSelected=$_POST['sweek'];}
else{ 
        date_default_timezone_set('America/Los_Angeles');
        $date = date('m/d/Y', time());
        $weekSelected=$_POST['weekSel'];
        
        if ($_POST['question'] == ''){       
             print_r("Error :: Can not submit an empty assignment.Must enter some question before submiting assignment !".nl2br("\n"));
        }
        if(!ctype_digit($_POST['marks']) ) {
            print_r('Error :: Marks for Assignment has to be an Integer number !'.nl2br("\n"));
        }
        if ((!is_date( $_POST['due_date'] ) )||(strtotime($_POST['due_date'])< strtotime($date))){
            print_r('Error :: Entered date is not valid ! Due Date has to be a valid future date.');
        }
        if(  (!($_POST['question'] == ''))  && ctype_digit($_POST['marks'])&&!(strtotime($_POST['due_date'])< strtotime($date))){
            AssignmentRepository::setWeekIAssignment($weekSelected, $_POST['question'], $_POST['marks'], $_POST['due_date']);
        }
    }
    function is_date( $str ) {
    try {
        $dt = new DateTime( trim($str) );
    }
    catch( Exception $e ) {
        return false;
    }
    $month = $dt->format('m');
    $day = $dt->format('d');
    $year = $dt->format('Y');
    if( checkdate($month, $day, $year) ) {
        return true;
    }
    else {
        return false;
    }
}
$assignment = AssignmentRepository::getAssignment($weekSelected);
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
            <h2>Assignment Page</h2>
        </header>
    <body>
        <form method="post" action="">
            <input type="hidden" value="<?php echo $weekSelected?>" name="weekSel">
            <h3>Week <?php echo $weekSelected ;?> Assignment</h3>
            <table>
                <tr>
                    <td text-align="left">
                        Marks: <input name="marks" type="text" size="4" value="<?php echo $assignment->getTotal_marks(); ?>"/>
                    </td>
                    <td text-align="right">
                        Due Date:<input type="date" name="due_date" value="<?php echo $assignment->getDue_date(); ?>"/>
                    </td>
                </tr>
            </table>
            </br>
            <textarea name="question"><?php echo $assignment->getQuestion(); ?></textarea>
            <input type="submit" id="submit" value='Submit Assignment'/>
        </form>
        <p><a href= '../view/faculty_home_page.php' >Faculty Home page</a></p>
    </body>
</html>
