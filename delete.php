<?php
	session_start();
	include ('config.php');
	//phpinfo();

$rollno=$_GET['Reg_no'];
$query1="DELETE FROM allocated WHERE Reg_no='$rollno' ";
$data1=mysqli_query($con,$query1);
$query2="DELETE FROM student_phno  WHERE Reg_no='$rollno' ";
$data2=mysqli_query($con,$query2);

$query3="DELETE FROM student_personal_details WHERE Reg_no='$rollno' ";
$data3=mysqli_query($con,$query3);
if($data3)
{
    echo "Deleted successfully";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project1/update_delete.php">
    <?php
}
else
{
    echo "not done";
}
?>
