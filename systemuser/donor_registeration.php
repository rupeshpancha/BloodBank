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
            /* overflow: hidden; */

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
if (isset($_SESSION['success_message'])) {
    echo "<script>alert('{$_SESSION['success_message']}');</script>";
    unset($_SESSION['success_message']); // Remove the message after displaying it
}
?>

<body>
    <div class="container">
        <div class="sidebar">
            <h2>Blood Bank Management </h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Blood doner registeration</a></li>
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
            <h1>Edit Donor Information</h1>
            <form action="" method="get">
                <label for="DonorId">Enter ID:</label>
                <input type="text" name="donorId" id="DonorID">
                <!-- Other form fields -->
                <input type="submit" value="Edit Patient Information">
            </form>
            <?php
            // Include database connection code here if not already included

            if (isset($_GET['donorId'])) {
                $donorId = $_GET['donorId'];
                if ($donorId === "") {
                    exit;
                } else {
                    $sql = "SELECT * FROM donor WHERE DonerId = $donorId";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
            ?>
                        <form action="update_donor.php" method="post">
                            <input type="hidden" name="donorId" value="<?php echo $donorId; ?>">
                            <label for="f_name">First Name:</label>
                            <input type="text" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required><br><br>

                            <label for="m_name">Middle Name:</label>
                            <input type="text" id="m_name" name="m_name" value="<?php echo $row['m_name']; ?>"><br><br>

                            <label for="l_name">Last Name:</label>
                            <input type="text" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required><br><br>
                            
                            <label for="DOB">Date: Of Birth</label>
                            <input type="date" id="DOB" name="DOB" value="<?php echo $row['birth_date']; ?>"><br><br>

                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" required>
                                <option value="male" <?php echo ($row['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo ($row['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
                                <option value="other" <?php echo ($row['gender'] == 'other') ? 'selected' : ''; ?>>Other</option>
                            </select><br><br>

                            <label for="bloodgroup">Blood Group:</label>
                            <input type="text" id="bloodgroup" name="bloodgroup" value="<?php echo $row['bloodgroup']; ?>" required><br><br>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

                            <label for="contact">Contact:</label>
                            <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>"><br><br>

                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"><br><br>

                            <label for="form_fill_date">Form Fill Date:</label>
                            <input type="date" id="form_fill_date" name="form_fill_date" value="<?php echo $row['form_fill_date']; ?>"><br><br>

                            <input type="submit" value="Save Changes">
                        </form>
            <?php
                    } else {
                        echo "<script>alert('Donor not found');</script>";
                    }
                }
            } else {
                //   echo "<script>alert('Donor ID not provided');</script>";
            }

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
            window.location.href = "own_changepassword.php"; // replace with your link
        }
    </script>
</body>

</html>