<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="dbms.css">
    <link rel="stylesheet" href="new_div.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="faculty_login">
	<center><h2>Enter student details</h2></center>
			
		<form action="student_registration_page.php" method="post">
		
			<div class="inner_container">
				<br><br><br><label><b>Registration number</b></label><br>
				<input type="text" placeholder="Registration number" name="username" id="username" required><br>
                
                <label><b>Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" id="password" required><br><br>
                <label><b>Sex</b></label>
				
                <input type="radio" name="sex" value="F" required>Female
                <input type="radio" name="sex" value="M"checked required>Male<br><br>
                <label><b>Branch</b></label><br>
				<input type="text" placeholder="Enter Branch" name="branch" id="password" required><br>
                <label><b>email-id</b></label><br>
				<input type="text" placeholder="Enter email-id" name="email_id" id="password" required><br>
                <label><b>Address</b></label><br>
				<input type="text" placeholder="Enter Address" name="address" id="password" required><br>
                <label><b>Bloodgrp</b></label><br>
				<input type="text" placeholder="Enter Bloodgrp" name="bloodgrp" id="password" required><br>
                <label><b>Room_no</b></label><br>
				<input type="text" placeholder="Enter Room number" name="roomno" id="password" required><br>
                <label><b>Mess_id</b></label><br>
				
                
                
                <select name="messid" required id="select">
                      <option value="DR1">DR1</option>
                      <option value="DR2">DR2</option>
                      <option value="PR1">PR1</option>
                      <option value="PR2">PR2</option>
                      <option value="SRC 1002">SRC 1002</option>
                      <option value="SRC2">SRC2</option>
                      <option value="ZEN3">ZEN3</option>
                      <option value="ZEN5">ZEN5</option>  
                
                </select>
                <br><label><b>Phone Number</b></label><br>
				<input type="text" placeholder="Phone number" name="phno" id="password" required><br>
                <label><b>password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br>
                
                
				<input name="register" type="submit" value="ADD STUDENT" id="green1" /><br>
                  <br> <a href="faculty_page.php"><input type="button" value="Back" id="blue1"></a>
				
			</div>
		</form>
		<?php
			if(isset($_POST['register']))
			{
				$username=$_POST['username'];
                $name=$_POST['name'];
                $sex=$_POST['sex'];
                $branch=$_POST['branch'];
                $email_id=$_POST['email_id'];
                $address=$_POST['address'];
                $bloodgrp=$_POST['bloodgrp'];
                $password=$_POST['password'];
                $roomno=$_POST['roomno'];
                $messid=$_POST['messid'];
                $phno=$_POST['phno'];
                
                $q="select * from student_personal_details where Reg_no='$username'";
                $b=mysqli_query($con,$q);
                if(mysqli_num_rows($b)>0)
                {
                    echo '<script type="text/javascript">alert("This Student already exsists pls try again !")</script>';
                }
                else
                {
                    $query = "insert into student_personal_details values('$username','$name',' $sex','$branch','$email_id','$address','$bloodgrp','$password');";
                    $query_run = mysqli_query($con,$query);

                    $query2 = "insert into allocated values('$username','$roomno','$messid');";
                    $query_run2 = mysqli_query($con,$query2);

                    $query3 = "insert into student_phno values('$username','$phno');";
                    $query_run3 = mysqli_query($con,$query3);

                    if($query_run)
                    {
                        echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
                    }

                    
                }
               
             }
        
        
		?>
		
	</div>
</body>
</html>