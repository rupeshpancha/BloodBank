<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users with Control Access</title>
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

        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
    <style>
        h1 {
            text-align: center;
            color: #b71c1c;
        }

        .container1 {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .column {
            margin: 0 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 30%;
        }

        .column h2 {
            text-align: center;
            color: #b71c1c;
        }

        .column ul {
            list-style-type: none;
            padding: 0;
        }

        .column ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
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
            ?>
            <!-- Add more menu items if needed -->
        </ul>
    </div>
    <div class="content">
        <?php
        // Start session and include database connection


        // Check if the user is logged in
        if (!isset($_SESSION['un'])) {
            header("Location: login.php");
            exit;
        }

        $un = $_SESSION['un'];

        // Query to fetch users with control access
        $sql = "SELECT username, role_id FROM users";
        $result = $conn->query($sql);

        $admins = [];
        $users = [];
        $donors = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                switch ($row['role_id']) {
                    case 1:
                        $admins[] = $row['username'];
                        break;
                    case 2:
                        $donors[] = $row['username'];
                        break;
                    case 3:
                        $users[] = $row['username'];
                        break;
                }
            }
        } else {
            echo "No users found.";
        }

        $conn->close();
        ?>

        <h1>Users with Control Access</h1>
        <div class="container1">
            <div class="column">
                <h2>Admins</h2>
                <ul>
                    <?php foreach ($admins as $admin) : ?>
                        <li><?php echo htmlspecialchars($admin); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="column">
                <h2>Users</h2>
                <ul style="list-style-type: none; padding: 0;">
                    <?php foreach ($users as $user) : ?>
                        <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #ddd;">
                            <span><?php echo htmlspecialchars($user); ?></span>
                            <span style="margin-left: auto;">
                                <a href="delete_user.php?username=<?php echo urlencode($user); ?>" style="color: #f00; text-decoration: none;" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="column">
                <h2>Donors</h2>
                <ul>
                    <?php foreach ($donors as $donor) : ?>
                        <li><?php echo htmlspecialchars($donor); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    Logged in as <span id="username"><?php echo $un ?></span>
    <button onclick="logout()">Logout</button>
    <button onclick="changePassword()">Change Password</button>
</div>


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