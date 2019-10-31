<?php
include_once('db.php');


if(isset($_POST['retailer-register'])){
	echo "hiii";
	$shop_name = $_POST['shop_name'];
	$shop_address = $_POST['shop_address'];
	$shop_email_id = $_POST['shop_email_id'];
	$shop_telephone_no = $_POST['shop_telephone_no'];
	$gst_number = $_POST['gst_number'];
	$username = $_POST['username'];
	$password = $_POST['user_password'];
	$type = 3;


	$query1 = "SELECT * FROM retailer WHERE shop_name = '$shop_name' AND gst_number = $gst_number";

	

	$res1 = mysqli_query($connection,$query1);
		$query  = "INSERT INTO retailer(shop_name,shop_address,shop_email_id,shop_telephone_no,gst_number) VALUES ('$shop_name','$shop_address','$shop_email_id',$shop_telephone_no,$gst_number)";
		$add_manufacturer = mysqli_query($connection,$query);


	

	$query2 = "SELECT * FROM user WHERE uname = '$username' AND warehouse_email_id = '$shop_email_id'";

	$res2 = mysqli_query($connection, $query2);
	
		$query  = "INSERT INTO user(uname,phone_number,email,password,type) VALUES ('$username',$shop_telephone_no,'$shop_email_id','$password',$type)";
		$add_user = mysqli_query($connection,$query);


	header("Location: login.php");





}
?>