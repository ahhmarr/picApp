<?php 
include_once("includes/header.php");
?>
<h1>upload image</h1>
<div class="upload_form">
	<form action="includes/process.php" method="post" enctype="multipart/form-data">
		<label for="uploadName">upload name</label>
		<input type="text" name="uploadName" id="uploadName" />
		<label for="uploadFile">image</label>
		<input type="file" name="uploadFile" id="uploadFile" />
		<input type="submit" value="submit" />
	</form>
</div>
<?php
include_once("includes/footer.php");