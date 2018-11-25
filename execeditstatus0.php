
<?php
include('connect.php');






	
			$id = $_POST['id'];
			$first=$_POST['first'];
			$last=$_POST['last'];
			$other=$_POST['other'];
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$class=$_POST['class'];
			$add=$_POST['add'];
			$parent=$_POST['parent'];
			$parentno=$_POST['parentno'];

			
		$q=mysqli_query($link,"UPDATE members SET firstname='$first',lastname='$last', othername='$other', username='$user',password='$pass',class='$class', address='$add', parent='$parent',parent_no='$parentno' WHERE id='$id'");
	if($q){
	header("location: dashboard.php");
	}
			
		
					
	


?>
