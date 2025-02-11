<?php
    include "inc/head.inc.php";
    include "inc/nav.inc.php";
    include "inc/header.inc.php";

    $email = $fname = $lname = $pwd = $pwd_confirm = $errorMsg = "";
    $success = true;

    // Validate first name
    $fname = sanitize_input($_POST["fname"]);

    // Validate last name
    if (empty($_POST["lname"])) {
        $errorMsg .= "Last name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["lname"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }

    // Validate password
    if (empty($_POST["pwd"])) {
        $errorMsg .= "Password is required.<br>";
        $success = false;
    } else {
        $pwd = $_POST["pwd"];
    }

    // Validate password confirmation
    if (empty($_POST["pwd_confirm"])) {
        $errorMsg .= "Password confirmation is required.<br>";
        $success = false;
    } else {
        $pwd_confirm = $_POST["pwd_confirm"];
        if ($pwd !== $pwd_confirm) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
    }

    // Validate terms and conditions agreement
    if (!isset($_POST["agree"])) {
        $errorMsg .= "You must agree to the terms and conditions.<br>";
        $success = false;
    }

    echo '<main class="container mb-5">';
    if ($success) {
        // Hash the password
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Display success message
        echo '<div class="alert alert-success" role="alert">';
        echo "<h1 class='alert-heading'>Your Registration is Successful!</h1>";
        echo "<h2>Thanks for signing up, ". $fname ." ". $lname .".</h2>";
        echo '</div>';
        echo '<a href="index.php" class="btn btn-primary">Log-In</a>';
        echo '</main>';
    } else {
        // Display error messages
        echo '<div class="alert alert-danger" role="alert">';
        echo "<h1 class='alert-heading'>Oops!</h4>";
        echo "<h2>The following errors were detected: </h2>";
        echo "<h3>" . $errorMsg . "</h3>";
        echo '</div>';
        echo '<a href="register.php" class="btn btn-primary">Return to Sign Up</a>';
        echo '</main>';
    }


    include "inc/footer.inc.php";

    /*
    * Helper function that checks input for malicious or unwanted content.
    */
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>