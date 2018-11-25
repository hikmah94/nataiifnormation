<?php
include('connect.php');
if(isset($_POST['submit'])){
$id = $_POST['id'];
$query = mysqli_query($link,"delete from members where id = '$id'");
header('location:dashboard.php');
}
?>
