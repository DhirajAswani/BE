<?php
require_once("../db.php");
$sql = "SELECT * FROM wholesaler_products,product
         WHERE product.product_id=wholesaler_products.product_id and wholesaler_id=".$_GET['id']; 
    $resultset = mysqli_query($connection, $sql);
    $json = [];
   while($row = mysqli_fetch_assoc($resultset)){
        $json[$row['product_id']] = $row['product_name'];
   }
   // echo query;
    echo json_encode($json);


?>