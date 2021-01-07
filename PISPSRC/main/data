<?php
header('Content-Type: application/json');

require_once('auth.php');

$sqlQuery = "SELECT product_id,gen_name,qty_sold FROM products ORDER BY product_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>