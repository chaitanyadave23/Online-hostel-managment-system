
<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
    <link rel="stylesheet" href="new_div.css"><br>
    <link rel="stylesheet" href="dbms.css">
</head>
<body>
    <h1>WELCOME TO BLOCK MANAGMENT</h1><br><br>
    <div id="border">
	<form action="faculty_page.php" method="post">
        <div id="size">Search student<br>
		
				<input type="text" placeholder="Registration number" name="username" id="input" required/>
				
				<input name="search" type="submit" value="SEARCH" id="bar1" />
        </div>
        				
	
		</form>
        <form action="faculty_page.php" method="post">
    
				
            <div id="add">  <a href="student_registration_page.php"><input name="add" type="button" value="Add New Student" id="bar"/></a></div>
                
            <div id="update">  <a href="update_delete.php"><input name="add" type="button" value="Update/Delete Student Details" id="bar"/></a></div>
                
				
        </form>
    </div>
    <?php
        $v=$_SESSION['username'];
        $s="select * from supervisor where supervisor_id='$v'";
        $s_run=mysqli_query($con,$s);
    
			if(isset($_POST['search']))
			{
				$username=$_POST['username'];
				
				$query = "select * from student_personal_details where Reg_no='$username'; ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				
			     if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{	
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					
					
					header( "Location:http://localhost/project1/student_page.php");
					
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
    <div id="back">    <CENTER><a href="faculty_login.php"><input type="button" value="Back" id="blue3"></a></CENTER></div>
    
    </body>
</html>
        
    