<?php include('../admin/signin/auth.php');?>

<html>
<head>
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
						<a  href="dashboard.php">
							<img alt="Dashboard" src="img/m-users.png">
                            <span>Students</span>						</a>
					</li>
<li>
						<a  href="parent.php" >
							<img alt="parent" src="img/icon1.png">
                            <span>Parent</span>						</a>
					</li>
					
					<li>
						<a href="result.php">
							<img alt="Statistics" src="img/m-custom.png">
							<span>E- Result</span>
						</a>
					</li>
					<li>
						<a href="inbox.php" class="active">
							<img alt="Statistics" src="img/m-newsletter.png">
							<span>Inbox</span>
						</a>
					</li>
					<li></li><div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
                    					<a rel="facebox" href="createmsg.php">Create New Message</a> ||
                    					<a rel="facebox" href="createbrod.php">Create New Broadcast</a>

					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">Sender </th>
								<th> Category </th>
								<th> Subject </th>
								<th> Body </th>
								<th> Date </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
						$link = @mysqli_connect('localhost', 'root', '', 'millenia_sms');
							$result = mysqli_query($link,"SELECT * FROM admin_inbox");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Sender'].'</td>';
									echo '<td><div align="right">'.$row['Cat'].'</div></td>';
									echo '<td><div align="right">'.$row['Subject'].'</div></td>';
									echo '<td><div align="right">'.$row['body'].'</div></td>';
									echo '<td><div align="right">'.$row['date'].'</div></td>';
echo '<td><div align="center"><a rel="facebox" href="editparent.php?id='.$row['id'].'">edit</a> | <a rel="facebox" href="editstat.php?id='.$row['id'].'" >delete</a></div></td>';
									echo '</tr>';
								}
								mysqli_close($link);
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					by
					<a class="afooter-link" href="https://milleniasoft.com">Milleniasoft</a>
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