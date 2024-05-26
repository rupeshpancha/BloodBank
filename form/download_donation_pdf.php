<?php
require('../fpdf/fpdf.php');
include('test.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Create PDF document
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Add donation information to the PDF
    $pdf->Cell(0, 10, 'DonorID: ' . $donorID, 0, 1);
    $pdf->Cell(0, 10, 'Blood Donation Information', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->Cell(0, 10, 'Full Name: ' . $f_name . ' ' . $m_name . ' ' . $l_name, 0, 1);
    $pdf->Cell(0, 10, 'Gender: ' . $gender, 0, 1);
    $pdf->Cell(0, 10, 'Blood Group: ' . $bloodgroup, 0, 1);
    $pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
    $pdf->Cell(0, 10, 'Address: ' . $address, 0, 1);
    $pdf->Cell(0, 10, 'Contact Number: ' . $contact, 0, 1);
    $pdf->Cell(0, 10, 'Form Fill Date: ' . $form_fill_date, 0, 1);

    $pdf->Output('D', 'Blood_Donation_Info.pdf');
}
$conn->close();
?>
