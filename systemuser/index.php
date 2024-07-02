<?php
include('connection.php');
session_start();

$un = $_SESSION['un'];
$role_id = $_SESSION['role_id'];

if (!$un || !isset($role_id)) {
    header("Location: login.php");
    exit; 
}

if ($role_id == '2') {
    header("Location: login.php");
    exit; 
}
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

        .top {
            text-align: center;
            padding: 20px;
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

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #b71c1c;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #8c1818;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h2>Blood Bank Management </h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="donor_registeration.php">Blood doner registeration</a></li>
                <li><a href="registeration.php">Patient registeration</a></li>
                <li><a href="stock_blood.php">Blood Stock</a></li>
                <?php if ($role_id ==  '1') {
                    echo "  <li><a href='add_user.php'>Add User</a></li>";
                    echo "<li><a href='change_password.php'>Change Password</a></li>";
                    echo "<li><a href='user_list.php'>List of Users</a></li>";
                }
                ?>
                <!-- Add more menu items if needed -->
            </ul>
        </div>
        <div class="content">
            <div class="top">
                <h1>Blood Bank Management System</h1>
            </div>
            <h1> Welcome <?php echo $un ?></h1>
            <div class="btn-container">
                <a href="donor_registeration.php" class="btn">Blood Donor Registration</a>
                <a href="registeration.php" class="btn">Patient Registration</a>
            </div>
            <div class="btn-container">
                <a href="stock_blood.php" class="btn">Blood Stock</a>
                <?php if ($role_id ==  '1') {
                    echo "<a href='change_password.php' class='btn'>Change Password</a>";
                    echo " <a href='add_user.php' class='btn'>Add User</a>";
                    echo " <a href='user_list.php' class='btn'>List of Users</a>";
                }
                ?>

                <!-- Add more content if needed -->
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
                window.location.href = "own_changepassword.php";
            }
        </script>
</body>

</html>