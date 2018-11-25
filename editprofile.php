<?php
 include('auth.php');
include('connect.php');
$id = $_SESSION['memberid'];
$query = mysqli_query($link, "SELECT * FROM biodata WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Millenia_sms|Profile</title>
<link href="css2/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js2/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--- Jquery--->
<!--- Goog Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- Header Starts Here ---->
	<div class="header">
		<div class="container">
			<div class="header-profile">
				<img src="../admin/<?php echo $row['picture'] ?>" alt=""/>
			</div>
		</div>
	</div>
	<div class="header-top">
				<h2><?php echo ucfirst($row['firstname']);   echo ucfirst($row['firstname']); ?></h2>
	</div>
	<div class="about">
		<div class="container">
			<div class="about-top">
				<h3 class="top-title">About Me</h3>
				<span class="line"></span>
				<p><form action="editexec.php" method="post"><center>
<textarea name="about">enter something about yourself</textarea></center>
				</p>
				<div class="row about-row">
					<div class="col-md-4 about-row-column">
						
					</div>
					<div class="col-md-8 about-row-column">
					<ul class="about-details">
							<li><p>Birthday: </p><select name="day"><option>DAY</option>
							                                <option value="1">1</option>       
                                                            <option value="2">2</option>
                                                           <option value="3">3</option>
                                                           <option value="4">4</option>
                                                           <option value="5">5</option>
                                                           <option value="6">6</option>
                                                           <option value="7">7</option>
                                                           <option value="8">8</option>
                                                           <option value="9">9</option>
                                                           <option value="10">10</option>
                                                           <option value="11">11</option>
                                                           <option value="12">12</option>
                                                           <option value="13">13</option>
                                                           <option value="14">14</option>
                                                           <option value="15">15</option>
                                                           <option value="16">16</option>
                                                           <option value="17">17</option>
                                                           <option value="18">18</option>
                                                           <option value="19">19</option>
                                                           <option value="20">20</option>
                                                           <option value="21">21</option>
                                                           <option value="22">22</option>
                                                           <option value="23">23</option>
                                                           <option value="24">24</option>
                                                           <option value="25">25</option>
                                                           <option value="26">26</option>
                                                           <option value="27">27</option>
                                                           <option value="28">28</option>
                                                           <option value="29">29</option>
                                                           <option value="30">30</option>
                                                           <option value="31">31</option>

							</select><select name="month"><option>MONTH</option>
							                                <option value="1">1</option>       
                                                            <option value="2">2</option>
                                                           <option value="3">3</option>
                                                           <option value="4">4</option>
                                                           <option value="5">5</option>
                                                           <option value="6">6</option>
                                                           <option value="7">7</option>
                                                           <option value="8">8</option>
                                                           <option value="9">9</option>
                                                           <option value="10">10</option>
                                                           <option value="11">11</option>
                                                           <option value="12">12</option>
                                                           
							</select>
<select name="year"><option>YEAR</option>
							                                <option value="1990">1990</option>       
                                                            <option value="1992">1992</option>
                                                           <option value="1993">1993</option>
                                                           <option value="1994">1994</option>
                                                           <option value="1995">1995</option>
                                                           <option value="1996">1996</option>
                                                           <option value="1997">1997</option>
                                                           <option value="1998">1998</option>
                                                           <option value="1999">1999</option>
                                                           <option value="2000">2000</option>
                                                           <option value="2001">2001</option>
                                                           <option value="2002">2002</option>
                                                           <option value="2003">2003</option>
                                                           <option value="2004">2004</option>
                                                           <option value="2005">2005</option>
                                                           <option value="2006">2006</option>
                                                           <option value="2007">2007</option>
                                                           <option value="2008">2008</option>
                                                           <option value="2009">2009</option>
                                                           <option value="2010">2010</option>
                                                           
							</select>
							</li>
							<li><p>Phone: <span><input type="text"name="mob_phone"/></span></p></li>
							<li><p>Email:  <span><input type="email" name="email"/></span></p></li>
							<li><p>Address: <span><input type="text" name="addr"/></span></p></li>
								<li><p><input type="submit" name="submit" value="Save"/></p></li>

						</ul><br/>
</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--- Footer Starts Here ---->
	<div class="footer">
		
	</div>
	<!--- Footer Ends Here ---->
</body>
</html>



