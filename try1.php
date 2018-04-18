<html>
<body>
		
<form method="POST" action="http://localhost:8080/clickepic/try/try1.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>

<?php
if(isset($_POST['submit_image'])){
$host = 'localhost';
$user = 'root';
$pass = '';
echo 'here';
mysql_connect($host, $user, $pass);

mysql_select_db('clickepic');
echo 'here1';
$imagename=$_FILES["myimage"]["name"]; 
echo 'here2';
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
echo 'here3';

//Insert the image name and image content in image_table
$insert_image="INSERT INTO `clickepic`.`pics` (`id`, `uid`, `image`, `likes`, `time`) VALUES (NULL, '1','$imagetmp','2',now())";

mysql_query($insert_image);

}
?>
</body>
</html>
