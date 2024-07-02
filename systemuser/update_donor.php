<?php
// Connect to your MySQL database (replace placeholders with actual values)
include('../conn.php');

// Assuming you have retrieved the form data using $_POST
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$form_fill_date = $_POST['form_fill_date'];
$DOB = $_POST['DOB'];

// Get the current date and time in the desired format
$verified_date = date('Y-m-d H:i:s');

// Prepare an SQL statement to insert the data into the database
$sql = "INSERT INTO register_donor (f_name, m_name, l_name, gender, bloodgroup, email,contact, address,  form_fill_date,verified_date,birth_date) 
        VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup','$email','$contact', '$address',  '$form_fill_date','$verified_date','$DOB')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['success_message'] = "Donor inserted successfully!";
    header("Location: donor_registeration.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
