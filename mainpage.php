<!DOCTYPE html>
<html>
<head>
	<title>my collection</title>
</head>
<body>

	
	<form method="get" action="mainpage.php">
		<input type="file" name="image" >
		<input type="submit" value="submit" name="submit1">
	</form>
<?php 
if(isset($_GET['image'])){
	$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("clickepic",$conn);
if(!$db){
	echo mysql_error();
	
}
$image=$_FILES['file'];
echo $image;
$f=$_GET['file'];
$sql="INSERT INTO `clickepic`.`pics` (`id`, `uid`,'image', `likes`, `time`) VALUES (null, '1','$f', '1', now());";
mysqli_query($db,$f);

echo"success";
}
	?>
</body>
</html>