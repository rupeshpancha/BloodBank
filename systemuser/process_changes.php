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
$contact = $_POST['contact'];
$address = $_POST['address'];
$file = $_POST['file'];
$doctor_name = $_POST['doctor_name'];
$hospital_name = $_POST['hospital_name'];
$disease = $_POST['disease'];
$form_fill_date = $_POST['form_fill_date'];

// Get the current date and time in the desired format
$verified_date = date('Y-m-d H:i:s');

// Prepare an SQL statement to insert the data into the database
$sql = "INSERT INTO register_patient (f_name, m_name, l_name, gender, bloodgroup, email, contact, address, file, doctor_name, hospital_name, disease, form_fill_date,verified_date) 
        VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup', '$email','$contact', '$address', '$file', '$doctor_name', '$hospital_name', '$disease', '$form_fill_date','$verified_date')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['success_message'] = "Patient inserted successfully!";
    header("Location: registeration.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
