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

// Check if the username parameter is set and not empty
if (isset($_GET['username']) && !empty($_GET['username'])) {
    $username = $_GET['username'];

    // Prepare and execute the SQL query to delete the user
    $sql = "DELETE FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}

// Redirect back to the user list page
header("Location: user_list.php");
exit();
?>
