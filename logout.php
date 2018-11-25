<?php

include('auth.php');
function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');

session_destroy();
}
if (isset($_SESSION['memberid']))
{
destroySession();
header("location:index.php");
}
?>