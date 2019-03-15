<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Update student phone number</title>
<link rel="stylesheet" href="dbms.css">
    <link rel="stylesheet" href="div.css">

</head>
<body style="background-color:#bdc3c7">
	<div id="faculty_login">
	<center><h2>Change password</h2></center>
		<form action="change_password.php" method="post">
			<div class="inner_container">
                
				<br><br><br><label><b>New Number</b></label>
				<input type="text" name="password" placeholder="Enter new password"  required> <br><br>
                <br><label><b>Confirm password</b></label>
				<input type="text" name="c_password" placeholder="Confirm password"  required><br><br>
                    
                <input type="submit" name="submit" value="Submit" id="abcd" ><br><br>
                <a href="student_personal_page.php"><input type="button" value="Back" id="abcd"></a><br><br>
                
			</div>
            <?php
            $z=$_SESSION['username'];
            if(isset($_POST['submit']))
            {
                $password=$_POST['password'];
                $c_password=$_POST['c_password'];
                if($password==$c_password)
                {
                    $query="update student_personal_details set password='$password' where Reg_no='$z'";
                    $data=mysqli_query($con,$query);
                    if($data)
                    {
                         echo '<script type="text/javascript">alert("Password changed successfully !")</script>';
                    }
                    else
                    {
                         echo '<script type="text/javascript">alert("Error !")</script>';
                    }
                }
                else
                {
                     echo '<script type="text/javascript">alert("password and confirm password are different pls try again !")</script>';
                }
                
               
            }
            
            
            ?>
		</form>
    </div>
    </body>