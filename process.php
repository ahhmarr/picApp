<?php 
include_once("database.php") 
if(!isset($_FILES['uploadImage']) ||  !isset($_POST['uploadName']))
{
	die("sorry the form is incomplete go <a href='../index.php'>back</a>");
}



?>