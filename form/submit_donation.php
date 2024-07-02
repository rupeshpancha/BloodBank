<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
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

// Insert data into the database
$sql = "INSERT INTO donor (f_name, m_name, l_name, gender, bloodgroup, email, address, contact, form_fill_date,birth_date)
VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup', '$email', '$address', '$contact', '$form_fill_date','$DOB')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record added successfully.')</script>";
    echo "<script>alert('Take form to blood bank to donate blood for easy process.')</script>";
    echo "<script> window.location.href = '../systemuser/logout.php';</script>";
    exit;
    // header('Location:../systemuser/donor_info.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-- <script>
    //  window.onload = logout();
function logout() {
    window.location.href = "logout.php"; // replace with your link
}
</script> -->