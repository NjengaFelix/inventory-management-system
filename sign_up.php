<?php

if(isset($_GET['error'])) {
$error = $_GET['error'];

if($error == "emailtaken") {
    echo "<p class='error'>Email is already taken</p>";
} else if($error == "insertfailed") {
    echo "<p class='error'>Something went wrong - " . $_GET['sqlerror'] ."</p>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color: #a0c3cf;">
    <div class="container">
        <form action="handle-php/sign_up.php" method="post" class="inner-container">
            <div class="form-space">
                <input type="text" name="first-name" id="first-name" placeholder="first name">
            </div>
            <div class="form-space">
                <input type="text" name="last-name" id="last-name" placeholder="last name">
            </div>
            <div class="form-space">
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-space">
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-space">
                <input type="password" name="confirm-password" id="confirm-password" placeholder="confirm password">
            </div>
            <div class="form-space">
            <button type="submit" name="submit" value="submitted" class="primary-button">Sign up</button>
            </div>
            <a href="login.php">Already have an account?</a>

        </form>
    </div>
</body>

</html>