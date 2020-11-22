<?php
include '../includes/db_connection.php';
$id = $_POST['ID'];
echo $id;
$query1 = $con->prepare("DELETE FROM projects WHERE ID = ?");

$query1->execute(array($id));
