<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Page Layout</title>
    <link rel="stylesheet" href="../form/form.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;

            /* Prevent scrolling on body */
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 200px;
            background: #de1f26;
            ;
            color: #fff;
            padding: 20px;
            flex-shrink: 0;
            /* Prevent sidebar from shrinking */
            overflow-y: auto;
            /* Enable vertical scrolling for sidebar if needed */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin-top: 0;
        }

        .sidebar ul li {
            margin-top: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 25px;
        }

        .sidebar ul li a {
            color: #FFf;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            color: #FFA500;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            /* Enable vertical scrolling for content if needed */
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

        .clicked-link {
            display: none;
            /* Hide the div by default */
            background-color: #f0f0f0;
            padding: 10px;
            margin-top: 10px;
        }

        .sidebar ul li a:target+.clicked-link {
            display: block;
            /* Show the div when the corresponding anchor is targeted */
        }
    </style>
</head>
<?php
$un = $_SESSION['un'];
$role_id = $_SESSION['role_id'];

if (!$un) {
    header("Location:login.php");
}

?>

<body>
    <div class="container">
        <div class="sidebar">
            <h2>Blood Bank Management </h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="donor_registeration.php">Blood doner registeration</a></li>
                <li><a href="registeration.php">Patient registeration</a></li>
                <li><a href="stock_blood.php">Blood Stock</a></li>

                <?php if ($role_id ==  '1') {
                    echo "  <li><a href='add_user.php'>Add User</a></li>";
                    echo "<li><a href='change_password.php'>Change Password</a></li>";
                    echo "<li><a href='user_list.php'>List of Users</a></li>";

                }
                ?> <!-- Add more menu items if needed -->
            </ul>
        </div>
        <div class="content">
            <h1>Blood Bank Management System</h1>
            <h1>Reset Password</h1>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <input type="submit" name="reset" value="Reset Password">
            </form>

            <?php
            // Check if the form is submitted

            if (isset($_POST['reset'])) {
                $username = $_POST['username'];

                // Check if the username exists in the database
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Username exists, update the password to 'bloodbank'
                    $sql_update = "UPDATE users SET password = 'bloodbank' WHERE username = '$username'";
                    if ($conn->query($sql_update) === TRUE) {
                        // echo "Password reset successfully. New password is 'bloodbank'.";
                        echo "
                        <div class ='content'>
                        <h1>Password reset successfully!</h1>
                        <label for='username'>New Passeord:</label>
                        <input type='text' id='username' name='username1'placeholder='bloodbank' readonly ><br><br>
                        </div>";
                    } else {
                        echo "<h1>Error updating password:<h1> " . $conn->error;
                    }
                } else {
                    echo "<h1>Username not found.</h1>";
                }
            }




            // Close the database connection
            $conn->close();

            ?>
        </div>
    </div>
    <div class="footer">
        Logged in as <span id="username"><?php echo $un ?></span>
        <button onclick="logout()">Logout</button>
        <button onclick="changePassword()">Change Password</button>
    </div>

    <!-- <div id="home" class="clicked-link">Clicked Link: Home</div>
    <div id="about" class="clicked-link">Clicked Link: About</div>
    <div id="services" class="clicked-link">Clicked Link: Services</div>
    <div id="contact" class="clicked-link">Clicked Link: Contact</div> -->

    <script>
        function logout() {
            window.location.href = "logout.php"; // replace with your link
        }

        function changePassword() {
            console.log('Change password functionality');
        }
    </script>
</body>

</html>