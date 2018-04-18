<?php

function loginf($u,$p){
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("clickepic",$conn);

 $x=0;
if(!$db){
	echo mysql_error();
	
}

$sql="select * from user where username='$u' and password='$p'";
 $r=mysql_query("$sql",$conn);
$result=mysql_query($sql);
$count=mysql_num_rows($result);

global $xx;
if ($count==1) {
	
	$x=1;
	return $x;
}else{

$x=0;
return $x;
}
}



function show_user_detail($u){

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("clickepic",$conn);

 $x=0;
if(!$db){
	echo mysql_error();
	
}

$q="select * from user where username='$u'";
$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){

		return $row['fname'].'  '.$row['lname'];
}
}


}



















?>