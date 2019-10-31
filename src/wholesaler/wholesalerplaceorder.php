<?php
require_once("../db.php");
session_start();
$user_id = $_SESSION['user_id'];
if(isset($_POST['add_product']))
{
    $query="select * from product where product_id={$_POST['product_id']}";
    $res=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($res);
    if($row)
    {
    	echo "success";
    }
    else
    {
    	echo "failure";
    }
    echo $query;
    $ttlcost=$row['manufacturer_product_cost']*$_POST['quantity'];
    
    $query1="insert into wholesaler_order(wholesaler_id,manufacturer_id,product_id,product_quantity,total_cost,status) values(4,{$_POST['manufacturer_id']},{$_POST['product_id']},{$_POST['quantity']},$ttlcost,0)";
    $res=mysqli_query($connection,$query1);
    if($res)
    {
    	echo "success";
    }
    else
    {
    	echo "failure";
    }
    echo $query1;
    header("Location: order-product.php");
}

?>