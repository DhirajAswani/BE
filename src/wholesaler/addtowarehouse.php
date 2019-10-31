<?php
	

		require_once('../db.php');
		$orderId = $_GET['orderid'];
		$query = "select * from wholesaler_order where wholesaler_order_id = $orderId";
		$result = mysqli_query($connection , $query);
		$row = mysqli_fetch_assoc($result);
		echo $query;
		$query1 = "select * from wholesaler_products where product_id={$row['product_id']} and wholesaler_id={$row['wholesaler_id']}";
		$result1 = mysqli_query($connection , $query1);
		$row1=mysqli_fetch_assoc($result1);
		echo $query1;
		if(mysqli_num_rows($result1)==0)
		{
			$query2="insert into wholesaler_products values({$row['wholesaler_id']},{$row['product_id']},{$row['product_quantity']})";
			$result2 = mysqli_query($connection , $query2);
			echo $query2;
		}else{
			$finalquantity=$row1['quantity']+$row['product_quantity'];
			$query3="update wholesaler_products set quantity=$finalquantity where wholesaler_id={$row['wholesaler_id']} and product_id={$row['product_id']}";
			$result3 = mysqli_query($connection , $query3);
			echo $query3;
		}
		$query4="update wholesaler_order set status=3 where wholesaler_order_id=$orderId";
		$result4=mysqli_query($connection , $query4);
		header("Location: order-product.php");

?>