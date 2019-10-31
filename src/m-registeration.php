<?php
include_once('db.php');

if(isset($_POST['manufacturer-register'])){
	$company_name = $_POST['company_name'];
	$company_address = $_POST['company_address'];
	$company_contact_number = $_POST['company_contact_number'];
	$company_identification_number = $_POST['company_identification_number'];
	$company_email_id = $_POST['company_email_id'];
	$username = $_POST['username'];
	$password = $_POST['user_password'];
	$type = 1;


	$query1 = "SELECT * FROM manufacturer WHERE company_name = '$company_name' AND company_identification_number = $company_identification_number";

	

	$res1 = mysqli_query($connection,$query1);
		$query  = "INSERT INTO manufacturer(company_name,company_address,company_contact_number,company_identification_number,company_email_id) VALUES ('$company_name','$company_address',$company_contact_number,$company_identification_number,'$company_email_id')";
		$add_manufacturer = mysqli_query($connection,$query);


	

	$query2 = "SELECT * FROM user WHERE uname = '$company_name' AND company_email_id = '$company_email_id'";

	$res2 = mysqli_query($connection, $query2);
	
		$query  = "INSERT INTO user(uname,phone_number,email,password,type) VALUES ('$username',$company_contact_number,'$company_email_id','$password',$type)";
		$add_user = mysqli_query($connection,$query);


	header("Location: login.php");





}
?>