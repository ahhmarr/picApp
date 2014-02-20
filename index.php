<?php include_once("includes/header.php") ?>
	<div class="container">
		<div class="form_container">
			<form action="core/process.php" method="post" enctype="multipart/form-data">
				<label for="uploadName">uploader name</label>
				<input type="text" id="uploadName" name="uploadName" placeholder="uploadName">
				<label for="img">image</label>
				<input type="file" name="img" id="img">
				<input type="submit" value="submit">
			</form>
		</div>
	</div>
</body>
</html>