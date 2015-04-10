<?php include_once 'config/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="vXsYXAMEMP7LJdbJixjHB8xvZOw3f3CPQoeUiG6ZSH8" />
	<title>News 48</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/assets/css/jquery.bxslider.css">


	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="navbar navbar-default"><!-- navbar-fixed-top|bottom navbar-static-top -->
					<div class="container-fluid">
						<div class="navbar-header">
							<a href="/" class="navbar-brand">New 48</a>
						</div><!-- end .navbar-header -->

						<ul class="nav navbar-nav">
							<li><a href="/news.php">News</a></li>
							<li><a href="/about.php">About Us</a></li>
							<li><a href="/contact.php">Contact Us</a></li>
							<li><a href="/json.php">JSON</a></li>
							<li><a href="/news-xml.php">RSS</a></li>
							<li><a href="/recent.php">History</a></li>
							<li><a href="/news-excel.php">Download Excel</a></li>
							<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){ ?>
								<li><a href="/admin/logout.php">Logout</a></li>
							<?php }else{?>
								<li><a href="/login.php">Login</a></li>
							<?php } ?>
						</ul>
					</div><!-- end .container-fluid -->
				</div><!-- end .navbar -->
				<div class="form-inline">
					<div class="form-inline col-sm-4">
						
						<gcse:search></gcse:search>
					</div>
					<br>
					<form action="/search.php" class="">
						<div class="form-group">
							<input type="text" class="form-control input-sm news-search" name="s" placeholder="search...">
							<button class="btn btn-sm btn-success">Search</button>
						</div>
					</form>
				</div>
				<hr>
			</div>

			<script>

				$('.news-search').autocomplete({
					source :'search-server.php',
					select: function(e, ui){

					}
				});

			</script>
			
			<script>
			  (function() {
			    var cx = '003413603150793121918:kwqkdqz4psw';
			    var gcse = document.createElement('script');
			    gcse.type = 'text/javascript';
			    gcse.async = true;
			    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			        '//www.google.com/cse/cse.js?cx=' + cx;
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
		
		</div><!-- end .row -->