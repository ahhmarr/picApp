<?php include_once("includes/header.php") ?>
<div class="gallery">
	<?php $all=$db->query("select * from pic") ?>
	<?php while($ans=$all->fetch_assoc()): ?>
		<div class="img">
			<div class="caption"><?php echo $ans["uploadName"] ?></div>
			<div class="galleryImg"><?php echo '<img src="'.$ans["image"].'"/>'; ?></div>
		</div>
	<?php endwhile; ?>
</div>
<?php include_once("includes/footer.php") ?>