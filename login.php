  <?php
        

$conn = mysqli_connect("localhost", "root", "", "mijndb")or die("cannot connect");
mysqli_select_db($conn, "mijndb")or die("cannot select DB");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to proceed</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>

<body>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="index.php" method="post" id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>new user? <a href="register.php">create new account</a></p>
			</div>
		</form>
        <?php 
            if(isset($_POST['username']) && isset($_POST['password'])){ 
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            $numrows = mysqli_num_rows($result);
                if($numrows > 0)
                {
                    $_SESSION['login_user']=$username;
                    echo "<p class='loginSucces'>succes</p>";
                }
                else
                {
                    echo '<p class="loginFail">Wrong username or password<p>';
                }
                
            }else{

            }
        ?>
	</div>
	<!-- end:Main Form -->
</div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Javascript.js"></script>
</body>

</html>