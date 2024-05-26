<?php
require('../fpdf/fpdf.php');
include('test.php');
// Retrieve confirmed data from POST
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

// Create PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set font and size
$pdf->SetFont('Arial', 'B', 16);

// Add patient information to the PDF
$pdf->Cell(0, 10, 'Patient Information', 0, 1, 'C');
$pdf->Ln(10);

// Set font for data
$pdf->SetFont('Arial', '', 12);

// Add individual information with better formatting

$pdf->Cell(0, 10, 'PatientID: ' . $patientID, 0, 1);
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

// Output the PDF as a download
$pdf->Output('D', 'Patient_Info.pdf');
$conn->close();
?>
