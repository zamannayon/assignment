<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$nam=$_POST['f_name'];
	$desig=$_POST['f_designation'];
	$phn=$_POST['f_phone'];
	$dob=$_POST['f_dob'];
	
	$sql="UPDATE teacher SET name='$nam', designation='$desig' ,
	phone='$phn', dob='$dob' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>