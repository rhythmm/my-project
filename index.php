<?php include_once 'includes/header.php'; 
		$featured_images=$connection->query("SELECT * FROM featured_image");
?>

<section class="photo_headline">
	<div class="col-sm-4 photo_feature">
		<h3>Photo Features</h3>

		<ul>
			<?php
				while($row=$featured_images->fetch_assoc()){

					echo "<li>";
						echo "<img src='uploads/" . $row['filename']  ."' width='400'>";
					echo "</li>";
				}

				?>
		</ul>
	</div>
	<div class="col-sm-4 top_headlines">

		<h3>Headlines</h3>
		<ul>
			<?php
				$results = $connection->query('SELECT * FROM news ORDER BY updated_at DESC LIMIT 5');
				while($row = $results->fetch_assoc()):
			 ?>
			<li>
				<h4><a href="/news-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
				<p>
					<?php echo substr($row['description'], 0, 50) . '...'; ?>
					<a href="/news-detail.php?id=<?php echo $row['id']; ?>" class="">read more</a>
				</p>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>

	<div class="col-sm-4 facebook_like">
		<h3>Follow us on Facebook</h3>
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
	</div>

</section>
<section>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-sm-6 youtube">
			<h3>Video</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/tmeOjFno6Do" frameborder="0" allowfullscreen></iframe>
		</div>


		<div class="col-sm-6 tweets">
			<h3>Tweets</h3>
			<a class="twitter-timeline" href="https://twitter.com/bipinkumal62" data-widget-id="551580392755429376">Tweets by @bipinkumal62</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
		</div>
		
	</div>
</section>

<?php include_once 'includes/footer.php'; ?>