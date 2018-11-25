<?php
						$link = @mysqlii_connect('localhost', 'root', '', 'ticket');

$type=$_POST['type'];
$route=$_POST['route'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysqlii_query($link,"INSERT INTO route (type, price, numseats, route, time)
VALUES
('$type','$price','$seat','$route','$time')");
header("location: result.php");
mysqlii_close($link);
?>
