<?php
 include('auth.php');
include('connect.php');
$id = $_SESSION['memberid'];
$query = mysqli_query($link, "SELECT * FROM members WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
 ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>NATAIS| Members Profile</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="formprofile/css/styles.css">
  <script type="text/javascript" src="formprofile/js/jquery-1.10.2.min.js"></script>
</head>

<body>
  <div id="topbar">
  <a href="portal.php">Back to Home</a>
  </div>
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="admin/<?php echo $row['picture'] ?>" alt=""/></div>
      <h1>NIGERIA ASSOCIATION OF TEACHERS OF ARABIC<br> & ISLAMIC STUDIES (NATAIS)</h1>
	  <h2>MEMBERSHIP FORM</h2>
	  

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Membership Status</a></li>
          <li><a href="#activity">Basic Information</a></li>
        </ul>
      </nav>
      
      <section id="bio">
        <p>verify registered member of NATAIS.</p>
      </section>
      
      <section id="activity" class="hidden">
        <p><strong>Membership Biodata:</strong></p>
		<p><strong>Reg. Number:</strong> <span><?php echo ucfirst($row['username']);?></span></p>
		  
        <p class="activity"><strong>Name:</strong> <?php echo ucfirst($row['title']); echo ucfirst($row['firstname']); ?> <?php echo ucfirst($row['lastname']);?>  <?php echo ucfirst($row['othername']);?></p>
        
        <p class="activity"><strong>Status:</strong> <span><?php echo ucfirst($row['status']);?></span></p>
        
        <p class="activity"><strong>Wing:</strong> <span><?php echo ucfirst($row['wing']);?></span></p>
        
        <p class="activity"><strong>Institution:</strong> <span><?php echo ucfirst($row['institution']);?></span></p>
        
        <p class="activity"><strong>Year of Registration: </strong> <span><?php echo ucfirst($row['year']);?></span></p>
		 <p class="activity"><strong>Phone Number:</strong> <span><?php echo ucfirst($row['phone_no']);?></span></p>
		  <p class="activity"><strong>Email Address:</strong> <span><a href=""><?php echo ucfirst($row['email']);?></a></span></p>
		   <p class="activity"><strong>Home Address:</strong> <span><?php echo ucfirst($row['address']);?></span></p>
      </section>
      
     
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
</body>
</html>


