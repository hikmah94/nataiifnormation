<?php include('../admin/signin/auth.php');?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>					<a class="alightred" href="../admin/signin/logout.php">Logout</a>
</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity:1; margin-top:0px;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
						<li>
						<a  href="dashboard.php" class="active">
							<img alt="Dashboard" src="img/m-users.png">
                            <span>Members</span>						</a>
					</li>
					<li>
						<a href="inbox.php" >
							<img alt="Statistics" src="img/m-newsletter.png">
							<span>Inbox</span>
						</a>
					</li>
					<li></li><div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
                    					<a rel="facebox" href="">Add Member</a>

					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Title </th>
								<th> Firstname </th>
								<th> Lastname </th>
								<th> Othername </th>
								<th> Username </th>
								<th> Password </th>
								<th> Status </th>
								<th> Wing </th>
								<th> Picture </th>
								<th> Address </th>
								<th> Institution </th>
								<th> Email Address </th>
								<th> Year </th>
								<th> Phone Number </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
						$link = @mysqli_connect('localhost', 'root', '', 'nataist');
							$result = mysqli_query($link,"SELECT * FROM members");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['title'].'</td>';
									echo '<td><div align="right">'.$row['firstname'].'</div></td>';
									echo '<td><div align="right">'.$row['lastname'].'</div></td>';
									echo '<td><div align="right">'.$row['othername'].'</div></td>';
									echo '<td><div align="right">'.$row['username'].'</div></td>';
									echo '<td><div align="right">'.$row['password'].'</div></td>';
									echo '<td><div align="right">'.$row['status'].'</div></td>';
									echo '<td><div align="right">'.$row['wing'].'</div></td>';
echo '<td><img src="'.$row['picture'].'" width="80" height="50"></td>';
									echo '<td><div align="right">'.$row['address'].'</div></td>';
									echo '<td><div align="right">'.$row['institution'].'</div></td>';							
									echo '<td><div align="right">'.$row['email'].'</div></td>';
									echo '<td><div align="right">'.$row['year'].'</div></td>';
									echo '<td><div align="right">'.$row['phone_no'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editstatus0.php?id='.$row['id'].'">edit</a> | <a rel="facebox" href="editstat.php?id='.$row['id'].'" >delete</a></div></td>';
									echo '</tr>';
								}
								mysqli_close($link);
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					<center>Copyright &copy; <?php echo date('Y'); ?> Developed By 
	<a href="target="_blank" href="http://facebook.com/shehuibrahim.muhammad">Hikmamtech ICT Solutions All Rights Reserved </a></center>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
 </body>
</html>