<!DOCTYPE html>
<html>
<head>
	<title>ClickE-pic</title>
	<script type="text/javascript"></script>
	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<style type="text/css">
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;

}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.footer{
  opacity: 0.5;
}
.footer:hover{
  opacity: 1;
}
#div1{
	font-size: 20px;
	max-width: 650px;
	margin-top: 70px;
  padding: 20px;
  font-size: 18px;
line-height: 30px;

}
</style>

	<script>

$(document).ready(function(){
    $("#r").click(function(){
        $.ajax({url: "http://localhost:8080/clickepic/info/aboutus.txt", success: function(result){
            $("#div1").html(result);
        }});
    });
     $("#l").click(function(){
        $.ajax({url: "http://localhost:8080/clickepic/info/events.txt", success: function(result){
            $("#div1").html(result);
        }});
    });
});
</script>
</script>


</head>
<body>
	
	<?php
include 'login-details.php';
if(isset($_POST['Username'])&&isset($_POST['Password'])){
$u=$_POST['Username'];
$p=$_POST['Password'];
}
else{
  $u='';
  $p='';
}

$m=loginf($u,$p);

if($m!=0){


	?>
<div class="container">

  <h2>ClickE-pic</h2>
   <ul>
  <li  ><a class="active" href="#home" >Home</a></li>
  <li><a href="#news">top photos</a></li>
  <li><a href="#contact">most viewed photos</a></li>
   <li><a href="#contact" id="l">events</a></li>
  <li id="r"><a href="#about">about us</a></li>
</ul>
  <h3 style="float: right; color: #4169e1"><?php echo show_user_detail($u);?></h3>
  <div class="panel panel-default">
  <div id="div1"><h2>clicke-pic</h2><p>just develop your careear as a professional photographer.we are giving you platform to creave your career take its benifit</p></div>

    <div class="panel-footer">
    	
    	<div class="footer">
    <table class="table table-striped">
   <tbody><tr><td><h5>E-mail</h5></td><td><input type="text" name="username"></td><td><input type="password" name="password"> <td><input type="button" name="submit" value="subscribe"></td></tr></tbody>
  </table>
</div>
    </div>
  </div>
</div>
    
<form method="POST" action="http://localhost:8080/clickepic/index.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>

<?php
if(isset($_POST['submit_image'])){
$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('clickepic');
$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));


//Insert the image name and image content in image_table
$insert_image="INSERT INTO `clickepic`.`pics` (`id`, `uid`, `image`, `likes`, `time`) VALUES (NULL, '$m','$imagetmp','0',now())";

mysql_query($insert_image);

}
?>

<?php }else{
echo 'please Enter correct username and password';
} ?>



</body>
</html>