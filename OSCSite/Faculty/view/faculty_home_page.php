<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../style.css">
        <title>Faculty Home Page</title>
    </head>

    <body>
        <header>
            <svg class ="absolute-center" width="300" height="81">
                <rect text-align="center"  width="400" height="81"/>
            </svg> 
               <h2>Faculty Home Page</h2>
        </header>
        <p><?php
            $name='manisha';
            $fullname = ''.$name.' vyas';
            echo $fullname;
            ?>
        </p>
        <form method="post" action='' name="form1" >
            <h3>Welcome Professor Mr.XYZ !</h3><br/><br/>
            <select name="sweek">
            <?php
            for($i=1;$i<=15;$i++)
            {
                echo "<option value='$i'> Week $i</option>";
            }
            ?>
            </select><br/><br/> 
            <input type="image" id="facBut" name="attendance"  src="../images/attandance.png" onclick="form1.action='../view/attendance_page.php'"/>
            <input type="image" id="facBut" name="handout" src="../images/handout.png" onclick="form1.action='../view/handout_page.php'"/>
            <input type="image" id="facBut" name="assignment"  src="../images/assignment.png" onclick="form1.action='../view/assignment_page.php'" />
        </form>
    </body>
</html> 
