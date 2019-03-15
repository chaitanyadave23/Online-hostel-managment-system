<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Mess change</title>
<link rel="stylesheet" href="dbms.css">
    <link rel="stylesheet" href="div.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="faculty_login">
	<center><h2>Select Mess</h2></center>
		<form action="change_mess.php" method="post">
			<div class="inner_container">
                <center>
				<br><br><br><label><b>Mess ID</b></label>
				<select name="mess_change" required id="select">
                      <option value="DR1">DR1</option>
                      <option value="DR2">DR2</option>
                      <option value="PR1">PR1</option>
                      <option value="PR2">PR2</option>
                      <option value="SRC 1002">SRC 1002</option>
                      <option value="SRC2">SRC2</option>
                      <option value="ZEN3">ZEN3</option>
                      <option value="ZEN5">ZEN5</option>    
                </select><br><br><br>
                <input type="submit" name="submit" value="Submit" id="abcd">
                
                </center>
			</div>
		</form>
        <?php
        $z=$_SESSION['username'];
        if(isset($_POST['submit']))
        {
            $mess=$_POST['mess_change'];
            $query="update allocated set mess_id='$mess' where Reg_no='$z'";
            $data=mysqli_query($con,$query);
            if($data)
            {
                echo '<script type="text/javascript">alert("Mess changed successfully !")</script>';
                header( "Location:http://localhost/project1/student_personal_page.php");
            }
            
            else
            {
                 echo '<script type="text/javascript">alert("Error !")</script>';
            }
        }
        ?>
        
        
        
    </div>
    </body>
</html>