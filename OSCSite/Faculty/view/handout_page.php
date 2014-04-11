<!DOCTYPE html>
 <?php
require('../model/db_connect.php');
require('../model/handout.php');
require('../model/handout_repository.php');
 
if(isset($_POST['sweek'])){$weekSelected=$_POST['sweek'];}
else{ 
        date_default_timezone_set('America/Los_Angeles');
        $date = date('m/d/Y', time());
        $weekSelected=$_POST['weekSel'];
        
        if ($_POST['material'] == ''){       
             print_r("Error :: Can not submit an empty Handout!".nl2br("\n"));
        }
        if(  !($_POST['material'] == '')) {
            HandoutRepository::setWeekIHandout($weekSelected, $_POST['material']);
        }
}
$handout= HandoutRepository::getHandouts($weekSelected);
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
            <h2>Handout Page</h2>
        </header>
    <body>
        <form method="post" action="">
            <input type="hidden" value="<?php echo $weekSelected?>" name="weekSel">
            <h3>Handout for Week <?php echo $weekSelected ;?></h3>
            <textarea name="material"><?php echo $handout->getMaterial(); ?></textarea>
            <input type="submit" value="Submit Handout" id="submit" />
        </form>
        <p><a href= '../view/faculty_home_page.php' >Faculty Home page</a></p>
    </body>
</html>

