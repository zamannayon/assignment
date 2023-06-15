<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$desig=$arr['designation'];
	$phn=$arr['phone'];
	$dob=$arr['dob'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
		<label>Name</label>
			<input type="text" placeholder="Enter name" name="f_name"> <br> <br>
			<label>Designation</label>
			<input type="text" placeholder="Enter designation" name="f_designation"> <br> <br>
			<label>Phone</label>
			<input type="text"  placeholder="Enter phone number" name="f_phone" > <br> <br>
			<label>DoB</label>
			<input type="date"  placeholder="Enter date of birth" name="f_dob" > <br> <br>
			<input type="submit" value="INSERT">
		</form>
	</center>	
	
</body>
