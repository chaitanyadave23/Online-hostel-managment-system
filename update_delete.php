<?php
	session_start();
	include ('config.php');
	//phpinfo();


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="new_div.css">
<title>Student Page</title>
</head>
<body style="background-color:white">
    <div id=abc>
       <center><h1>STUDENT DETAILS</h1> <br><br><br>
        <table border="2" align:center>
  <thead>
    <tr>
      <th>REG_NO</th>
      <th>NAME</th>
      <th>SEX</th>
        <th>BRANCH</th>
        <th>EMAIL-ID</th>
        <th>ADDRESS</th>
        <th>BLOODGRP</th>
        <th>Room no</th>
        <th>Phone.no</th>
        <th>Mess ID</th>
        <th>UPDATE</th>
        <th>DELETE</th>
    </tr>
  </thead>
<style>
    td
    {
        padding:10px;
        text-align: center;
    }
    table
    {
        text-align: center;
    }
            </style>                
<?php
        
$result = mysqli_query($con,"SELECT * FROM student_personal_details,allocated,student_phno where student_personal_details.Reg_no=allocated.Reg_no and student_personal_details.Reg_no=student_phno.Reg_no");

while($row = mysqli_fetch_array($result))
{
    
    echo "<tr><td>{$row['Reg_no']}</td><td>{$row['Name']}</td><td>{$row['Sex']}</td><td>{$row['Branch']}</td><td>{$row['email_id']}</td><td>{$row['Address']}</td><td>{$row['Bloodgrp']}</td><td> {$row['blockname_roomno']}   </td><td> {$row['phno']}   </td><td> {$row['mess_id']}   </td><td><a href='update.php?Reg_no=$row[Reg_no]&Name=$row[Name]&Sex=$row[Sex]&Branch=$row[Branch]&email_id=$row[email_id]&Address=$row[Address]&Bloodgrp=$row[Bloodgrp]&Room_no=$row[blockname_roomno]&ph_no=$row[phno]&mess_id=$row[mess_id]'>UPDATE</a></td><td><a href='delete.php?Reg_no=$row[Reg_no]' onclick='return checkdelete()'>DELETE</a></td></tr>\n";
}
  
?>
            
            
        </table>
           <script>
               function checkdelete()
               {
                   return confirm('Are you sure you want to delete the data?');
               }
           </script>
           
           <br> <a href="faculty_page.php"><input type="button" value="Back" id="blue2"></a>
           
           
           
           
        </center>
        </div>
</body>
</html>