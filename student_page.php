<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Page</title>
<link rel="stylesheet" href="dbms.css">
    <link rel="stylesheet" href="new_div.css">
</head>
<body style="background-color:#C39BD3">
    <div id=faculty_login>
        <h1>STUDENT DETAILS</h1><br><br><br>
        
<?php


$z=$_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM student_personal_details where Reg_no='$z'");
$result2= mysqli_query($con,"SELECT * FROM allocated,mess,block_room_details  where mess.mess_id=allocated.mess_id and block_room_details.blockname_roomno=allocated.blockname_roomno and Reg_no='$z'");
$result3 = mysqli_query($con,"SELECT * FROM student_phno where Reg_no='$z'");
echo "<div id='student'>";
while($row = mysqli_fetch_array($result))
{
echo "Reg no :  ". $row['Reg_no']."<br><br>";
echo "Name :  ". $row['Name']."<br><br>";
echo "Sex :  ". $row['Sex']."<br><br>";
echo "Branch :  ". $row['Branch']."<br><br>";
echo "Email-id :  ". $row['email_id']."<br><br>";
echo "Address :  ". $row['Address']."<br><br>";
echo "Blood grp :  ". $row['Bloodgrp']."<br><br>";
}
        
             
while($row2 = mysqli_fetch_array($result2) )
{
  
echo "Room Number : ". $row2['blockname_roomno']."<br><br>";    
echo "Room Type : ". $row2['roomtype']."<br><br>";  
echo "Mess_id : ". $row2['mess_id']."<br><br>";      
}
        
while($row3 = mysqli_fetch_array($result3) )
{ 
    echo "Phone number : ".$row3['phno']." <a href='change_mess.php'><br><br>"; 
    
}


?>
         <a href="faculty_page.php"><input type="button" value="Back" id="blue"></a>
        </div>
</body>
</html>