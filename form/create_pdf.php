<?php
// Assuming you have retrieved the form data using $_POST

// Assigning form data to variables
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$email = $_POST['email'];
$address = $_POST['address'];
$file = $_POST['file'];
$doctor_name = $_POST['doctor_name'];
$hospital_name = $_POST['hospital_name'];
$disease = $_POST['disease'];
$form_fill_date = $_POST['form_fill_date'];

// Your database connection and insertion code here
// Example:
// $conn = new mysqli($servername, $username, $password, $dbname);
// $sql = "INSERT INTO patient_information (f_name, m_name, l_name, gender, bloodgroup, email, address, file, doctor_name, hospital_name, disease, form_fill_date) VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup', '$email', '$address', '$file', '$doctor_name', '$hospital_name', '$disease', '$form_fill_date')";
// $conn->query($sql);
// Database connection parameters
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

// Assuming you have retrieved the form data using $_POST

// Assigning form data to variables
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$email = $_POST['email'];
$address = $_POST['address'];
$file = $_POST['file'];
$doctor_name = $_POST['doctor_name'];
$hospital_name = $_POST['hospital_name'];
$disease = $_POST['disease'];
$form_fill_date = $_POST['form_fill_date'];

// SQL query to insert data into the database
$sql = "INSERT INTO patient 
        (f_name, m_name, l_name, gender, bloodgroup, email, address, file, doctor_name, hospital_name, disease, form_fill_date)
        VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$bloodgroup', '$email', '$address', '$file', '$doctor_name', '$hospital_name', '$disease', '$form_fill_date')";

if ($conn->query($sql) === TRUE) {
    // Redirect to success page or display a success message
    echo "Data stored successfully!";
    // require('create_pdf.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



// Output the PDF for download
require('../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Patient Information', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Full Name: ' . $f_name . ' ' . $m_name . ' ' . $l_name, 0, 1);
$pdf->Cell(0, 10, 'Gender: ' . $gender, 0, 1);
$pdf->Cell(0, 10, 'Blood Group: ' . $bloodgroup, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Address: ' . $address, 0, 1);
$pdf->Cell(0, 10, 'File: ' . $file, 0, 1);
$pdf->Cell(0, 10, 'Doctor Name: ' . $doctor_name, 0, 1);
$pdf->Cell(0, 10, 'Hospital Name: ' . $hospital_name, 0, 1);
$pdf->Cell(0, 10, 'Disease: ' . $disease, 0, 1);
$pdf->Cell(0, 10, 'Form Fill Date: ' . $form_fill_date, 0, 1);
$pdf->Output('D', 'Patient_Info.pdf');
?>
