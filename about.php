<?php include_once 'includes/header.php'; ?>

<?php  
	$result=$connection->query("SELECT * FROM contents");
	// var_dump($result->num_rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	<div class="container" style="height:550px;">
		<div class="row">
			<?php  			
				while($row=$result->fetch_assoc()){
					echo "<div>";
					echo "<h2>".$row['title']."</h2>";
					echo "<p>".$row['description']."<p>";
					echo "</div>";
				}
			
			?>
	
		</div>
	</div>	
</body>
</html>

<?php include_once 'includes/footer.php'; ?>
