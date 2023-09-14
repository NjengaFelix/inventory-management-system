<?php
//connect to database
//checks first if the db file has been included
require_once '../db.php';

//Checks if the user has clicked the submit button
if(!isset($_POST['submit'])) {
    header("Location: ../sign_up.php");
    exit();
}

//Checks if the user has filled out all the fields using isset()
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//Check if the email is already in the database
$check_email_query = "SELECT * FROM users WHERE email = '$email';";

//Run the query
$check_email_result = mysqli_query($conn, $check_email_query);


if(mysqli_num_rows($check_email_result) > 0) {
    header("Location: ../sign_up.php?error=emailtaken");
    exit();
}

//Insert into users table
$insert_query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword');";

$insert_result = mysqli_query($conn, $insert_query);

//Check if the query was successful
if(!$insert_result) {
    // mysqli_error($conn);
    header("Location: ../sign_up.php?error=insertfailed&sqlerror=" . mysqli_error($conn));
    exit();
}

//Redirect to login page
header("Location: ../login.php");

