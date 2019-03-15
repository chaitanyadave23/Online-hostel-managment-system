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
	<center><h2>Enter student details</h2></center>
			<div class="inner_container">
		<form action="" method="GET">
		
			
				<br><br><br><label><b>Registration number</b></label><br>
				<input type="text" placeholder="Registration number" name="username" id="username" required value="<?php echo $_GET['Reg_no'];  ?>"/><br>
                
                <label><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="name1" id="password" value="<?php echo $_GET['Name'];  ?>"/> <br>
            
             <label><b>Sex</b></label><br >
				<input type="text" placeholder="Enter Name" name="gender" id="password" value="<?php echo $_GET['Sex'];  ?>"/> <br>
            
             <label><b>Branch</b></label>
				<input type="text" placeholder="Enter Name" name="Branch1" id="password" value="<?php echo $_GET['Branch'];  ?>"/> <br>
            
             <label><b>Email-id</b></label>
				<input type="text" placeholder="Enter Name" name="Email_id1" id="password" value="<?php echo $_GET['email_id'];  ?>"/> <br>
            
             <label><b>Address</b></label>
				<input type="text" placeholder="Enter Name" name="Address1" id="password" value="<?php echo $_GET['Address'];  ?>"/> <br>
             
            <label><b>Blood grp</b></label>
				<input type="text" placeholder="Enter Name" name="Blood_grp1" id="password" value="<?php echo $_GET['Bloodgrp'];  ?>"/> <br>
            
            <label><b>Room no</b></label>
				<input type="text" placeholder="Enter Name" name="Room_no1" id="password" value="<?php echo $_GET['Room_no'];  ?>"/> <br>
             
				<label><b>Mess ID</b></label>
				<input type="text" placeholder="Enter Name" name="mess_id1" id="password" value="<?php echo $_GET['mess_id'];  ?>"/> <br>
            <label><b>Phone no</b></label>
				<input type="text" placeholder="Enter Name" name="phno1" id="password" value="<?php echo $_GET['ph_no'];  ?>"/> <br>

             
				<input name="update" type="submit" value="UPDATE" id="log" /><br>
            
		</form>
<?php
if(isset($_GET['update'])) 
{
    
    $reg_no=$_GET['username'];
    $name=$_GET['name1'];    
    $Sex=$_GET['gender'];        
    $branch=$_GET['Branch1'];    
    $email_id=$_GET['Email_id1'];    
    $address=$_GET['Address1'];    
    $blood_grp=$_GET['Blood_grp1'];      
    $room_no=$_GET['Room_no1'];    
    $mess_id=$_GET['mess_id1'];
    $phno=$_GET['phno1'];

    $query="update student_personal_details set Reg_no='$reg_no',Name='$name', Sex='$Sex',Branch='$branch',email_id='$email_id', Address='$address',Bloodgrp='$blood_grp' where Reg_no='$reg_no'";
    $data1=mysqli_query($con,$query);
    
    $query1="update allocated set mess_id='$mess_id',blockname_roomno='$room_no'where Reg_no='$reg_no'";
    $data2=mysqli_query($con,$query1);
    
     $query2="update student_phno set phno='$phno' where Reg_no='$reg_no'";
    $data3=mysqli_query($con,$query2);
    
    
    
    if($data1)
    {
         echo '<script type="text/javascript">alert("Student details updated successfully !")</script>';
        header( "Location:http://localhost/project1/update_delete.php");
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