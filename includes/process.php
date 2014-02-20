<?php 
include_once("database.php");
if(!isset($_FILES['uploadFile']) ||  !isset($_POST['uploadName']))
{
	die("sorry the form is incomplete go <a href='../index.php'>back</a>");
}
$oldPath=$_FILES["uploadFile"]["tmp_name"];
$name=$_FILES["uploadFile"]["name"];
$newPath='img/'.time().$name;
//uplaoding the file to the img folder
$mv=move_uploaded_file($oldPath, "../".$newPath);
$uploadName=$_POST["uploadName"];
$query="insert into pic (uploadName,image) values ('$uploadName','$newPath')";
$result=$db->query($query);
if($result)
{
	echo "successfully submitted";
}
else
{
	echo "there is some error";
}
echo '<br/> go <a href="../index.php">back</a>';




?>