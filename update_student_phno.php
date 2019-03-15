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
    <link rel="stylesheet" href="new_div.css">

</head>
<body style="background-color:#bdc3c7">
	<div id="faculty_login">
	<center><h2>Change phone number</h2></center>
		<form action="update_student_phno.php" method="post" >
			<div class="inner_container">
                <center>
				<br><br><br><label><b>Phone Number</b></label>
				<input type="text" name="phone_num" placeholder="Enter new number" required>
                    <input type="submit" name="submit" value="Submit" id="gold"></form>
               <br><br>
                <form action="update_student_phno.php" method="post" >
                    <center><h2>Add new phone number</h2></center>
                    <br><label><b>Phone Number</b></label>
				<input type="text" name="phone_num1" placeholder="Enter number to be added" required>
                <input type="submit" name="submit1" value="Submit" id="gold">
                   <br><br><br> <a href="student_personal_page.php"><input type="button" value="Back" id="blue"></a>
                </center>
			</div>
            <?php
            $z=$_SESSION['username'];
            if(isset($_POST['submit']))
            {
                $phno=$_POST['phone_num'];
                $query="update student_phno set phno='$phno' where Reg_no='$z'";
                $data=mysqli_query($con,$query);
                if($data)
                {
                     echo '<script type="text/javascript">alert("Phone number changed successfully !")</script>';
                }
                else
                {
                     echo '<script type="text/javascript">alert("Error !")</script>';
                }
            }
            
            
            if(isset($_POST['submit1']))
            {
                $phno1=$_POST['phone_num1'];
                $q="select * from student_phno where phno='$phno1'";
                $run=mysqli_query($con,$q);
                
                if(mysqli_num_rows($run)>0)
                {
                 
                     echo '<script type="text/javascript">alert("This phone number already exsists !")</script>';
                   
                }
                else
                {   
                    $query="insert into student_phno values('$z','$phno1')";
                    $data=mysqli_query($con,$query);    
                    if($data)
                    {
                         echo '<script type="text/javascript">alert("Phone added successfully !")</script>';
                    }
                    else
                    {
                         echo '<script type="text/javascript">alert("Error !")</script>';
                    }
                }
                
            }
            
            
            
            ?>
		</form>
    </div>
    </body>