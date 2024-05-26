<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Patient Information</title>
    <link rel="stylesheet" href="form.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .confirm-info {
            margin-bottom: 20px;
        }
        .confirm-info p {
            margin: 10px 0;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        .btn-container form {
            margin-bottom: 10px;
        }
        .btn-container input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>


    <h1>Confirm Patient Information</h1>
    <?php
    include('test.php');
        echo "Patient ID: " . $patientID . "<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data
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

        // Display the data for confirmation
        echo "<p><strong>First Name:</strong> $f_name</p>";
        echo "<p><strong>Middle Name:</strong> $m_name</p>";
        echo "<p><strong>Last Name:</strong> $l_name</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Blood Group:</strong> $bloodgroup</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Contact:</strong> $contact</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>File:</strong> $file</p>";
        echo "<p><strong>Doctor Name:</strong> $doctor_name</p>";
        echo "<p><strong>Hospital Name:</strong> $hospital_name</p>";
        echo "<p><strong>Disease:</strong> $disease</p>";
        echo "<p><strong>Form Fill Date:</strong> $form_fill_date</p>";

        // Provide options to download PDF or confirm submission
        echo '<form action="download_pdf.php" method="post">
                <input type="hidden" name="f_name" value="'.$f_name.'">
                <input type="hidden" name="m_name" value="'.$m_name.'">
                <input type="hidden" name="l_name" value="'.$l_name.'">
                <input type="hidden" name="gender" value="'.$gender.'">
                <input type="hidden" name="bloodgroup" value="'.$bloodgroup.'">
                <input type="hidden" name="email" value="'.$email.'">
                <input type="hidden" name="contact" value="'.$contact.'">
                <input type="hidden" name="address" value="'.$address.'">
                <input type="hidden" name="file" value="'.$file.'">
                <input type="hidden" name="doctor_name" value="'.$doctor_name.'">
                <input type="hidden" name="hospital_name" value="'.$hospital_name.'">
                <input type="hidden" name="disease" value="'.$disease.'">
                <input type="hidden" name="form_fill_date" value="'.$form_fill_date.'">
                <input type="submit" value="Download PDF">
              </form>';

        echo '<form action="submit.php" method="post">
       
                <input type="hidden" name="f_name" value="'.$f_name.'">
                <input type="hidden" name="m_name" value="'.$m_name.'">
                <input type="hidden" name="l_name" value="'.$l_name.'">
                <input type="hidden" name="gender" value="'.$gender.'">
                <input type="hidden" name="bloodgroup" value="'.$bloodgroup.'">
                <input type="hidden" name="email" value="'.$email.'">
                <input type="hidden" name="contact" value="'.$contact.'">
                <input type="hidden" name="address" value="'.$address.'">
                <input type="hidden" name="file" value="'.$file.'">
                <input type="hidden" name="doctor_name" value="'.$doctor_name.'">
                <input type="hidden" name="hospital_name" value="'.$hospital_name.'">
                <input type="hidden" name="disease" value="'.$disease.'">
                <input type="hidden" name="form_fill_date" value="'.$form_fill_date.'">
                <input type="submit" value="Confirm">
              </form>';
    }
    ?>
</body>
</html>
