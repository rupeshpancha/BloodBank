<?php
include('connection.php');
session_start();
$un = $_SESSION['un'];
$role_id = $_SESSION['role_id'];
if (!$un) {
    header("Location:login.php");
}

?>

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

        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
<nav>

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
        ?>
        <!-- Add more menu items if needed -->
    </ul>
</nav>    <h2>Blood Bank Management </h2>