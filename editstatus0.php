<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
width:98%;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form action="execeditstatus0.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value=<?php echo $id=$_GET['id'] ?>">
	<?php echo'<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Firstname </th>
								<th> Lastname </th>
								<th> Othername </th>
								<th> Title </th>
								<th> Username </th>
								<th> Password </th>
								<th> Address </th>
								<th> Institution </th>
								<th> Email Address </th>
								<th> Year </th>
								<th> Phone Number </th>
							</tr>
						</thead>
						<tbody> ';
						
						$link = @mysqli_connect('localhost', 'root', '', 'nataist');
							$result = mysqli_query($link,"SELECT * FROM members where id= '$id'");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;"><input type="text" value="'.$row['firstname'].'" name="first"/></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['lastname'].'" name="last"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['othername'].'" name="other"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['title'].'" name="title"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['username'].'" name="user"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['password'].'" name="pass"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['address'].'" name="add"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['institution'].'" name="institute"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['email'].'" name="email"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['year'].'" name="year"/></div></td>';
									echo '<td><div align="right"><input type="text" value="'.$row['phone_no'].'" name="phoneno"/></div></td>';
																			
									echo '</tr>';
								}
								mysqli_close($link);
							 
					echo'	</tbody>
					</table>' ;?>  
 			 
	<br>
	<input type="submit" value="Save" id="button1">
</form>