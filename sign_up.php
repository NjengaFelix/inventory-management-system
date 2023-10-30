<?php

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    if ($error == "emailtaken") {
        echo "<div class='alert alert-danger alert-dismissible'>
        Email is already taken
        <button type='button' class='close' data-dismiss='alert'>
  <span aria-hidden='true'>&times;</span>
</button>
        </div>";
    } else if ($error == "insertfailed") {
        echo "<p class='error'>Something went wrong - " . $_GET['sqlerror'] . "</p>";
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
<!-- add alert -->
        <form id="sign-up-form" action="handle-php/sign_up.php" method="post" class="inner-container">
            <div class="form-space">
                <input type="text" name="first-name" id="first-name" placeholder="first name" required>
            </div>
            <div class="form-space">
                <input type="text" name="last-name" id="last-name" placeholder="last name" required>
            </div>
            <div class="form-space">
                <input type="email" name="email" id="email" placeholder="email" required>
            </div>
            <div class="form-space">
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <div class="form-space">
                <input type="password" name="confirm-password" id="confirm-password" placeholder="confirm password" required>
            </div>
            <div class="form-space">
                <button type="submit" name="submit" value="submitted" class="primary-button">Sign up</button>
            </div>
            <a href="login.php">Already have an account?</a>

        </form>
        <!-- add alert -->
    </div>
    <!-- It is recommended to add javascript here -->
    <script src="js/index.js"></script>
</body>

</html>