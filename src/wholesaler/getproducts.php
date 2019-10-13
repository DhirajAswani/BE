<?php
require_once("../db.php");
$sql = "SELECT * FROM product
         WHERE manufacturer_id=".$_GET['id']; 
    $resultset = mysqli_query($connection, $sql);
    $json = [];
   while($row = mysqli_fetch_assoc($resultset)){
        $json[$row['product_id']] = $row['product_name'];
   }
    echo json_encode($json);


?>