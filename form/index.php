<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Patient Information Form</h1>
    <form id="patientForm" action="confirm.php" method="post">
        <!-- Your form fields here -->
        <label for="f_name">First Name:</label>
        <input type="text" id="f_name" name="f_name" required><br><br>

        <label for="m_name">Middle Name:</label>
        <input type="text" id="m_name" name="m_name"><br><br>

        <label for="l_name">Last Name:</label>
        <input type="text" id="l_name" name="l_name" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>


        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="file">File:</label>
        <input type="file" id="file" name="file"><br><br>

        <label for="doctor_name">Doctor Name:</label>
        <input type="text" id="doctor_name" name="doctor_name" required><br><br>

        <label for="hospital_name">Hospital Name:</label>
        <input type="text" id="hospital_name" name="hospital_name" required><br><br>

        <label for="disease">Disease:</label>
        <input type="text" id="disease" name="disease"required><br><br>

        <label for="form_fill_date">Form Fill Date:</label>
        <input type="date" id="form_fill_date" name="form_fill_date" min="<?php $currentDate = date('Y-m-d'); echo $currentDate; ?>"required><br><br>

        <input type="submit" value="Submit">

    </form>
</body>

</html>