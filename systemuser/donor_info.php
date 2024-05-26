<?php
include('connection.php');
session_start();

$un = $_SESSION['un'];
// $role_id = $_SESSION['role_id'];

if (!$un) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Information</title>
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

<body>
    <h1>Donor Information</h1>

    <?php
    // Database connection parameters
    include('connection.php');

    // Sample donor ID (replace with actual donor ID)
    $email = $un;

    // Retrieve donor information
    $sql = "SELECT * FROM register_donor WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display donor information
        $donor = $result->fetch_assoc();
        $query = "SELECT email, COUNT(email) AS donation_count 
        FROM register_donor 
        WHERE email = '$email'
        GROUP BY email;
        ";
        $_SESSION["email"] = $email;
        $result = $conn->query($query);

        if ($result) {
            // Display the donation count for each email
            while ($row = $result->fetch_assoc()) {
                echo "<form class='donor-info' method='POST' ACTION='../form/doner.php'>";
                echo "<label>Name:</label><input type='text' value='{$donor['f_name']} {$donor['m_name']} {$donor['l_name']}' readonly>";
                echo "<label>Email:</label><input type='email' value='{$un}'readonly>";
                echo "<label>Contact:</label><input type='text' value='{$donor['contact']}'readonly>";
                echo "<label>Address:</label><textarea readonly>{$donor['address']}</textarea>";
                echo "<label>Blood Group:</label><input type='text' value='{$donor['bloodgroup']}'readonly>";
                echo "<label>Total donation:</label><input type='text' value='{$row['donation_count']}'readonly>";
                echo "<label>Last Donate:</label><input type='date' value='{$donor['verified_date']}'readonly>";

                $start_date = new DateTime($donor['verified_date']);
                $end_date = clone $start_date;
                $end_date->modify("+60 days");
        
                // Calculate the difference in days
                $now = new DateTime();
                $interval = $now->diff($end_date);
                $total_days = $interval->format('%a');
                
                if ($total_days==0) {
                    # code...
                    echo "<input type='submit' value='Donate Again' >";
                }
                else
                echo "<label>Days until next donation:</label><input type='text' value='{$total_days}' readonly>";
                // echo "<input type='submit' value='Donate Again' >";
                echo "</form>";
            }
            $result->free();
        } else {
            echo "Error executing query: ";
        }
    } else {
        echo "<script>alert('Donor not found.')</script>";
        header('Location:choose.php');
        exit;
    }


    // Close the database connection
    $conn->close();
    ?>
    <div class="footer">
        <!-- Logged in as <span id="username"><?php echo $un ?></span> -->
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