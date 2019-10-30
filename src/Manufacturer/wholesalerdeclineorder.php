<?php
require_once("../db.php");
$orderid=$_GET['wholesaler_order_id'];
$query="update wholesaler_order set status =-1 where wholesaler_order_id=$orderid";
$res=mysqli_query($connection,$query);
header("Location: pending_orders.php");
?>