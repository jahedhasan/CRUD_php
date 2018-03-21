<?php 
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'school');
$con->query("delete from teachers where id=$id");
header('Location: read.php');