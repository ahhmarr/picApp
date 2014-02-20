<?php 
include_once("core.php");
if(isset($_POST['uploadName']))
{
	$uploadName=$_POST['uploadName'];
	if(isset($_FILES['img']))
	{
		$name=$_FILES['img']['name'];
		$path=$_FILES['img']['tmp_name'];
		$newName="images/".time().$name;
		move_uploaded_file($path,"../".$newName);
		$db->query("insert into pic (uploadName,image) value ('$uploadName','$newName')");
	}
	header("location:../index.php");
}
else
{
	echo 'invalid request performed';
}

?>