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
	<center><h2>Supervisor Login</h2></center>
			<div class="imgcontainer">
                <center><img src="FacelessMan.svg"class="faceman"></center>
			</div>
		<form action="faculty_login.php" method="post">
		
			<div class="inner_container">
				<br><br><br><label><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" id="username" required><br><br><br>
				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br>
				<input name="login" type="submit" value="Login" id="green1" /><br>
                  <br> <a href="home_page.php"><input type="button" value="Back" id="blue1"></a>
				
			</div>
		</form>
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select * from supervisor where supervisor_id='$username' and password='$password'; ";
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
					
					header( "Location:http://localhost/project1/faculty_page.php");
					
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