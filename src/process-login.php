<?php
include_once('db.php');
session_start();
// $global connection;
if(isset($_POST['login'])){
	$user_email = $_POST['user_email'];
	$password = $_POST['user_password'];

	$query = "SELECT * FROM user WHERE email = '$user_email' and password='$password'";
	$res=mysqli_query($connection,$query);
	$row=mysqli_fetch_assoc($res);
	$type=$row['type'];
	echo $type;
	if($type==1)
	{
		$_SESSION['user_id'] = $row['uid'];		
		header("Location: Manufacturer/index.php");
		// link to manufacturer dboard
	}else if($type==2)
	{
		$_SESSION['user_id'] = $row['uid'];		
		header("Location: wholesaler/order-product.php");
		// wholesaler
	}else if($type==3){
		$_SESSION['user_id'] = $row['uid'];		
		header("Location: retailer/order-product.php");
		// retailer
	}else if($type==4){
		$_SESSION['user_id'] = $row['uid'];
		header("Location: customer/index.php");
	}
	else{
		header("Location: error.php");
	}

}

?>