<?php

 require_once('../db.php');
$myArray = $_POST['hasharray'];
// echo $myArray;
$hashes="";
$hashes=$hashes.$myArray[0];
for($i=1;$i<sizeof($myArray);$i++)
{
	$hashes=$hashes.",".$myArray[$i];
}

$orderId=$_POST['orderId'];
$query="update wholesaler_order set hashdata='{$hashes}',status=1 where wholesaler_order_id={$orderId}";
$result=mysqli_query($connection,$query);
echo json_encode($query);
// if(mysqli_affected_rows($connection)!=1)
// {
// 	echo "error";
// 	die();
// }
?>