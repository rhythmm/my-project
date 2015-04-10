<?php include_once 'includes/header.php'; ?>
<?php

	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header("Location: admin/index.php");
	}

	if(!empty($_POST)){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($_POST['answer']==2){

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = $connection->query($query);
			$row = $result->num_rows;

			if($row == 1){
				$_SESSION['logged_in']=true;
				header("Location: admin/index.php");
			}else{
				echo '<div class="col-lg-12">
					<div class="alert alert-danger">Login Incorrect</div>
				</div>';
			}

		}else{
			echo '<div class="col-lg-12">
					<div class="alert alert-danger">Incorrect Answer</div>
				</div>';
		}

	}
?>

<div class="row">

	<div class="col-sm-4">
		<h3>Login</h3>
		<form action="login.php" method="post">

			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control input-sm" name="username">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control input-sm" name="password">
			</div>
			<div class="form-group">
				<label for="">1+1= ?</label>
				<input type="text" class="form-control input-sm" name="answer">
			</div>

			<button class="btn btn-sm btn-info">Login</button>

		</form>
	</div>
</div>

<?php include_once 'includes/footer.php'; ?>