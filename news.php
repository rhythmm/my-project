<?php include_once 'includes/header.php'; ?>
<?php
	$news = $connection->query('SELECT * FROM news');
 ?>
<div class="col-sm-12 list">
	<h1>Latest News</h1>
	<ul>

		<?php while($row = $news->fetch_assoc()): ?>
		<li>
			<h4><a href="/news-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
			<p>
				<?php echo substr($row['description'], 0, 100) . '...'; ?>
				<a href="/news-detail.php?id=<?php echo $row['id']; ?>" class="">read more</a>
			</p>
		</li>
		<?php endwhile; ?>
	</ul>
</div>

<?php include_once 'includes/footer.php'; ?>