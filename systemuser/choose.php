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
    <style>
        #old,#new {
    background-color: #d90000;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
    height: 45px;
}


    </style>
</head>

<body>
    <div class="container">
        <h1>Choose </h1>
        <!-- <form action="login.php" method="post"> -->

            <button id="new" name="new">New Donor</button><br><br>
            <br><br><br>
            <button id="old" name="old">Old Donor</button>
        <!-- </form> -->
        <script>
        // Function to change background color
        function old() {
            window.location.href = "login.php"; // replace with your link
        }

        // Function to display a message
        function neww() {
            window.location.href = "donor_signup.php"; // replace with your link
        }

        // Assign event handlers to buttons
        document.getElementById('old').onclick = old;
        document.getElementById('new').onclick = neww;
    </script>
    </div>
</body>


<!-- <?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // User found, set session variables
//         $user = $result->fetch_assoc();
//         // $_SESSION['user_id'] = $user['id'];
//         $_SESSION['username'] = $user['username'];
//         $_SESSION['role_id'] = $user['role_id'];

//         // Redirect based on role
//         if ($user['role_id'] == 1 || $user['role_id'] == 3) {
//             $_SESSION["un"] = $username;
//             $_SESSION["role_id"] = $user['role_id'];
//             header("Location: index.php");
//         } else {
//             $_SESSION["un"] = $username;
//             header("Location: donor_info.php");
//         }
//     } else {
//         echo "Invalid username or password.";
//     }
// }
// $conn->close();

?> -->


</html>