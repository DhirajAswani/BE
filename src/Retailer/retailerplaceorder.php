<?php
require_once("../db.php");
if(isset($_POST['add_product']))
{
    $query="select * from product where product_id={$_POST['product_id']}";
    $res=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($res);
    
    echo $query;
    $ttlcost=$row['wholesaler_product_cost']*$_POST['quantity'];
    
    $query1="insert into retailer_order(retailer_id,wholesaler_id,product_id,product_quantity,total_cost,status) values(7,{$_POST['wholesaler_id']},{$_POST['product_id']},{$_POST['quantity']},$ttlcost,0)";
    $res=mysqli_query($connection,$query1);
    
    echo $query1;
    header("Location: order-product.php");
}

?>