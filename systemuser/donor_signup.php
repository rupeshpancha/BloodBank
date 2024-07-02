<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Blood Bank Management System</h1>
        <h2 style="color:#d90000" ;>Fill the form</h2>
        <form action="" method="post" id="signupForm" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="username">Email:</label>
                <input type="email" id="username" name="username" required style=" width: 100%;
                                                                                    padding: 10px;
                                                                                    border-radius: 3px;
                                                                                    border: 1px solid #ccc;">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="minimum 8 characters" required>
            </div>
            <div class="input-group">
                <label for="c_password">Confirm Password:</label>
                <input type="password" id="c_password" name="c_password" placeholder="minimum 8 characters" required>
            </div>
            <button type="submit" name="sub" id="signupForm">Sign up</button>
        </form>
    </div>


</body>
<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("c_password").value;

        // Check if username starts with a letter

        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false; // Prevent form submission
        }
        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
</script>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];

    // Check if the email already exists in the database
    $sqll = "SELECT * FROM users WHERE username = '$email'";
    $resultt = $conn->query($sqll);

    if ($resultt->num_rows > 0) {
        echo "<script>alert('Email already exists!')</script>";
    } else {

        // Close the database connection




        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['c_password'];

            // SQL injection prevention: Convert special characters to HTML entities
            $username = htmlspecialchars($username);
            $password = htmlspecialchars($password);
            $cpassword = htmlspecialchars($cpassword);
            $role_id = 2; // Convert to integer

            if ($password === $cpassword) {
                // Here you can proceed with your registration or update logic
                $sql = "INSERT INTO users (username, password,  role_id)
                VALUES ('$username', '$password', ' $role_id')";

                // Execute the SQL query
                if ($conn->query($sql) === TRUE) {

                    echo "<script>alert('Sucess'); 
                     window.location.href ='../form/doner.php';
                    </script> ";
                    $_SESSION['email'] = $username;
                    exit;
                } else {
                    echo "<script>alert('Error inserting record:'); </script> ";
                }
            } else {
                echo "<script>alert('Passwords do not match. Please try again.');</script>";
            }

            // SQL query to insert form data into users table

            // Close the connection
            $conn->close();
        }
    }
}
?>


</html>