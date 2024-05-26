<?php
include('connection.php');
session_start();

$un = $_SESSION['un'];
$role_id = $_SESSION['role_id'];

if (!$un) {
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System - Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #de1f26;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #de1f26;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ff4d4d;
        }
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: #de1f26;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .footer button {
            background-color: #FFD700;
            color: #333;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin-right: 10px;
        }

        .footer button:hover {
            background-color: #FFA500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Change Password</h1>
        <form id="changePasswordForm" action="changepassword.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo"$un" ?>" required readonly><br><br>

            <label for="old_password">Old Password:</label>
            <input type="password" id="old_password" name="old_password" required><br><br>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <input type="submit" name="own_changepassword" value="Change Password">
        </form>
    </div>

    <div class="footer">
        Logged in as <span id="username"><?php echo $un ?></span>
        <button onclick="logout()">Logout</button>
    </div>

    <script>
        document.getElementById("changePasswordForm").onsubmit = function() {
            var newPassword = document.getElementById("new_password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (newPassword !== confirmPassword) {
                alert("New passwords do not match. Please enter them again.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        };

        function logout() {
            window.location.href = "logout.php"; // replace with your link
        }
    </script>
</body>
</html>
