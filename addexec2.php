<?php
include('connect.php');


function getextension($str){
             $i = strrpos($str, ".");
             if(!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1, $l);
return $ext;
}


	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
$image = $_FILES["image"]["name"];
$uploadedfile = $_FILES["image"]["tmp_name"];

if($image){
$filename = stripslashes($_FILES['image']['name']);
 $extension = getextension($filename);
$extension = strtolower($extension);
 if(($extesion!= "jpg") && ($extesion != "jpeg") && ($extension!= 

"png") && ($extension!="gif")){
$error = "";
}
else {
$size = filesize($_FILES['image']['tmp_name']);
if(($extension == "jpg") || ($extension== "jpeg")){
$uploadedfile = $_FILES['image']['tmp_name'];
$src= imagecreatefromjpeg($uploadedfile);

}
else if($xtension== "png"){
$uploadedfile = $_FILES['image']['tmp_name'];
$src= imagecreatefrompng($uploadedfile);
}
else {
$src= imagecreatefromgif($uploadedfile);
}
list($width, $height) = getimagesize($uploadedfile);
$newwidth = 400;
$newheight = 400;
$temp = imagecreatetruecolor($newwidth, $newheight);

$newwidth1 = 223;
$newheight1 = 208;
$temp1 = imagecreatetruecolor($newwidth1, $newheight1);

$newwidth2 = 94;
$newheight2 = 94;
$temp2 = imagecreatetruecolor($newwidth2, $newheight2);

imagecopyresampled($temp, $src, 0,0,0,0, $newwidth, $newheight, 

$width, $height);

imagecopyresampled($temp1, $src, 0,0,0,0, $newwidth1, 

$newheight1, $width, $height);

imagecopyresampled($temp2, $src, 0,0,0,0, $newwidth2, 

$newheight2, $width, $height);

imagejpeg($temp, $filename,100);
imagejpeg($temp1, $filename1,100);
imagejpeg($temp2, $filename2,100);

imagedestroy($src);
imagedestroy($temp);
imagedestroy($temp1);imagedestroy($temp2);
}
$filename = "img/students/"; 
$filename .= $_FILES['image']['name'];

			
			move_uploaded_file($uploadedfile,$filename);
			
			$location= $filename;
			$first=$_POST['first'];
			$last=$_POST['last'];
			$other=$_POST['other'];
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$gender=$_POST['gender'];
			$occupation=$_POST['occupation'];
			$phone_no=$_POST['phone_no'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];

			$query = mysqli_query($link, "SELECT * FROM biodata WHERE parent_no = '".$phone_no."'");
			$result = mysqli_fetch_assoc($query);
			$parent_to =$result['username'];
			$update= mysqli_query($link,"INSERT INTO parent_data(firstname, lastname, othername, username, password, gender, occupation, phone_no, email, contact, picture, parent_to) VALUES('$first','$last','$other','$user','$pass','$gender','$occupation','$phone_no', '$email', '$contact','$location','$parent_to')") or die('Unable to establish a DB connection');
header("location: parent.php");
			
		
			}
	}


?>
