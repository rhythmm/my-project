<?php header("Content-type: application/javascript");
include_once 'config/connect.php'; ?>
<?php
	$news = $connection->query('SELECT * FROM news');
	$results = $news->fetch_assoc();

	echo json_encode($results);
 ?>