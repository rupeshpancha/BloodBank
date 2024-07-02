<!DOCTYPE html>
<?php
include ('connection.php');
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System - Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Include the CSS here if not using an external stylesheet */
        a.custom-link {
            color: #b71c1c; /* Set the text color */
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Make the text bold */
            padding: 10px 15px; /* Add padding */
            border-radius: 5px; /* Add rounded corners */
            background-color: #f7f7f7; /* Set background color */
            transition: background-color 0.3s, color 0.3s; /* Add transition for hover effect */
        }

        a.custom-link:hover {
            background-color: #b71c1c; /* Change background color on hover */
            color: #fff; /* Change text color on hover */
        }

        a.custom-link:active {
            background-color: #8c1818; /* Change background color when active */
            color: #fff; /* Change text color when active */
        }
    </style>
</head>
<body>
    <header><h1><a href="../index.php" class="custom-link">Home page</a></h1></header>
    <div class="container">
        <h1>Blood Bank Management System</h1>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" autocomplete="off"  required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
            </div>
            <button type="submit" name="sub">Login</button>
        </form>
    </div>
</body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $usernname = $_SESSION['un'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, set session variables
        $user = $result->fetch_assoc();
        // $_SESSION['user_id'] = $user['id'];
        // $_SESSION['username'] = $user['username'];
        // $_SESSION['role_id'] = $user['role_id'];

        // Redirect based on role
        if ($user['role_id'] == 1 || $user['role_id'] ==3) {
            $_SESSION["un"] = $username;
            $_SESSION["role_id"] = $user['role_id'];
            header("Location: index.php");
        } else {
            $_SESSION["un"] = $username;
            $_SESSION["role_id"] = $user['role_id'];
            header("Location: donor_info.php");
        }
       
    } else {
        echo "<script>alert('Invalid username or password.')</script>";
    }
}

    $conn->close();

?>


</html>
