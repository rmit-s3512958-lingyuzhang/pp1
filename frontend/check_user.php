<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to HOME Page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: home.php");
  exit;
}
 
// Include database configuration file
require_once "db_config.php";
 
// Define variables and initialize with empty values
$email = "";
$password = "";
$email_err = "";
$password_err = "";
 
// Store Form Data
//if(isset($GET["email"]) && isset($GET["password"])){
$email = $_POST["email"];
$password = $_POST["password"];

// Validate credentials
// Prepare a select statement
$sql = "SELECT * FROM users where email='$email'";

$result = mysqli_query($link, $sql); // $link is obtained
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count > 1){
	// Password is correct, so start a new session
	session_start();
	
	// Store data in session variables
	$_SESSION["loggedin"] = true;
	$_SESSION["first_name"] = $row['first_name'];
	$_SESSION["last_name"] = $row['last_name'];
	$_SESSION["email"] = $email;                            
	
	// Redirect user to welcome page
	header("location: index.php");
} else{
	// Display an error message if password is not valid
	$email_err = "No account found with that email.";
	$password_err = "The password you entered was not valid.";
	
}
                        
// Close connection
mysqli_close($link);

if($email_err !="" || $password_err !=""){
?>
 
