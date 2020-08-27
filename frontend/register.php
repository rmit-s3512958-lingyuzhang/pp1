		<?php
		// Start Session
		session_start();

		// Load PHP files for Database connection
		require 'db_connection.php';
		$db = DB();

		$register_error_message = '';

		// check Register request
		if (!empty($_POST['btnRegister'])) {
			if ($_POST['name'] == "") {
				$register_error_message = 'Name field is required!';
			} else if ($_POST['email'] == "") {
				$register_error_message = 'Email field is required!';
			} else if ($_POST['username'] == "") {
				$register_error_message = 'Username field is required!';
			} else if ($_POST['password'] == "") {
				$register_error_message = 'Password field is required!';
			} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$register_error_message = 'Invalid email address!';
			} else if ($app->isEmail($_POST['email'])) {
				$register_error_message = 'Email is already in use!';
			} else if ($app->isUsername($_POST['username'])) {
				$register_error_message = 'Username is already in use!';
			} else {
				$user_id = $app->Register($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
				// set session and redirect user to the profile page
				$_SESSION['user_id'] = $user_id;
				header("Location: confirm_google_auth.php");
			}
		}
		?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <title>Register page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h4 class="join_us">Join us</h4>
            <form method="POST">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="fistName" name="firstName"
                        placeholder="Enter Fisrt Name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Type you Email Address">
                </div>
                <div class="form-group">
                    <label for="remail">Retype Email address</label>
                    <input type="email" class="form-control" id="re_email" name="remail"
                        placeholder="Retype you Email Address">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="password" name="pass">
                </div>
                <div class="form-group">
                    <label for="pass"> Retype Password</label>
                    <input type="password" class="form-control" id="re_password" name="pass">
                </div>

                <button type="submit" class="btn btn-primary" id="">Submit</button>
            </form>
        </div>

        <footer id="footer" class="py-2 bg-light text-black-90">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://shareCars.com/"> shareCars.com</a>
            </div>
            <!-- Copyright -->

        </footer>
    </div>
    <script src="./js/main.js"></script>
    <script src="./js/register.js"></script>
</body>

</html>
