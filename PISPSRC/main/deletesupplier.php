<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM suppliers WHERE supplier_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>