<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];
// query
$sql = "INSERT INTO suppliers (supplier_name,supplier_address,supplier_contact,contact_person,note) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$d,':d'=>$c,':e'=>$e));
header("location: supplier.php");


?>