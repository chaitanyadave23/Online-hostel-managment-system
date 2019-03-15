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
</head>
<body style="background-color:#bdc3c7">
	<div id="faculty_login">
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
                <center><img src="FacelessMan.svg"class="faceman"></center>
			</div>
		<form action="apple.php" method="post">
		
			<div class="inner_container">
				<br><br><br><label><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" id="username" required><br><br><br>
				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br>
				<input name="login" type="submit" value="Login" id="log" /><br>
				
			</div>
		</form>
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select * from student_personal_details where Reg_no='$username' and password='$password'; ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				
			     if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{	
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location:http://localhost/student_page.php");
					
						}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
				
				
				
				
			
		?>
		
	</div>
</body>
</html>