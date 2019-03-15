<?php
	session_start();
	include ('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="div.css">
<title>Student Personal Page</title>
<link rel="stylesheet" href="dbms.css">
</head>
<body>
    
        <div id="name">
        <center>
<?php

$z=$_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM student_personal_details where Reg_no='$z'");
$result2= mysqli_query($con,"SELECT * FROM allocated,mess,block_room_details,fess_details where fess_details.roomtype=block_room_details.roomtype and mess.mess_id=allocated.mess_id and block_room_details.blockname_roomno=allocated.blockname_roomno and Reg_no='$z';");
$result3 = mysqli_query($con,"SELECT * FROM student_phno where Reg_no='$z'");     
while($row = mysqli_fetch_array($result))
{
echo "<center><h2>WELCOME ".$row['Reg_no']."</h2>";
echo "<h2>" .$row['Name']."</h2><br><br></center>";

}
           
?>
            </center>
        </div>
    <br><br><br><br>
    <center> 
    <a href='change_mess.php'><input type='button' name='update_mess' value='Change mess' id="abc"></a>
    <a href='update_student_phno.php'><input type='button' name='update_phno' value='Change/Add new phno' id="abc"></form></a>
    <a href='change_password.php'><input type='button' name='change_password' value='Change password' id="abc"></a>
    <a href='student_login.php'><input type='button' value='Logout' id="abc"></a><br><br><br><br><br>
        </center>
    
     <div id="student">
<?php
while($row2 = mysqli_fetch_array($result2) )
{
  
echo "Room Number : ". $row2['blockname_roomno']."<br><br>";    
echo "Room Type : ". $row2['roomtype']."<br><br>"; 
echo "Hostel fees : ". $row2['fees']."<br><br>"; 
echo "Mess_id : ". $row2['mess_id']." <br><br>";      
echo "Mess fess: ". $row2['fess']."<br><br>";  
}
 $x=0;       
while($row3 = mysqli_fetch_array($result3) )
{ 
    $x=$x+1;
    
    echo "Contact number$x : ".$row3['phno']."<br><br>"; 
}

?>
    </div>
        
        
</body>
</html>