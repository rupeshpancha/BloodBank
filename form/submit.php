<?php
// Connect to your database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "blood_management";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include('../conn.php');

// Retrieve confirmed data from POST
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

// Insert data into database
$sql = "INSERT INTO patient (f_name, m_name, l_name, gender, bloodgroup, email,contact, address, file, doctor_name, hospital_name, disease, form_fill_date) 
        VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup', '$email','$contact', '$address', '$file', '$doctor_name', '$hospital_name', '$disease', '$form_fill_date')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to index page
echo"<script>

alert('form submitted sucess');
    window.location.href = '../index.php';

</script>";
exit;
?>
