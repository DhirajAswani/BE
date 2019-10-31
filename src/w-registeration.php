<?php
include_once('db.php');


if(isset($_POST['wholesaler-register'])){
	$warehouse_name = $_POST['warehouse_name'];
	$warehouse_address = $_POST['warehouse_address'];
	$warehouse_email_id = $_POST['warehouse_email_id'];
	$warehouse_telephone_no = $_POST['warehouse_telephone_no'];
	$gst_number = $_POST['gst_number'];
	$username = $_POST['username'];
	$password = $_POST['user_password'];
	$type = 2;


	$query1 = "SELECT * FROM wholesaler WHERE warehouse_name = '$warehouse_name' AND gst_number = $gst_number";

	

	$res1 = mysqli_query($connection,$query1);
		$query  = "INSERT INTO wholesaler(warehouse_name,warehouse_address,warehouse_email_id,warehouse_telephone_no,gst_number) VALUES ('$warehouse_name','$warehouse_address','$warehouse_email_id',$warehouse_telephone_no,$gst_number)";
		$add_manufacturer = mysqli_query($connection,$query);


	

	$query2 = "SELECT * FROM user WHERE uname = '$username' AND warehouse_email_id = '$warehouse_email_id'";

	$res2 = mysqli_query($connection, $query2);
	
		$query  = "INSERT INTO user(uname,phone_number,email,password,type) VALUES ('$username',$warehouse_telephone_no,'$warehouse_email_id','$password',$type)";
		$add_user = mysqli_query($connection,$query);


	header("Location: login.php");





}
?>