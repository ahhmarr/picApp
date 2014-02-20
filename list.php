<?php include_once("includes/header.php") ?>
<?php $all=$db->query("select * from pic") ?>
<div class="container">
	<div class="list_image">
		<ul>
			<?php while($ans=$all->fetch_assoc()): ?>
				<li>
					<img src="<?php echo $ans["image"] ?>" alt=""></li>
			<?php endwhile; ?>
		</ul>
	</div>

</div>
</body>
</html>