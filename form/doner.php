<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        .error {
            display: none;
            color: red;
            margin-top: 5px;
        }
    </style>
</head>

<script>
    function validateForm() {
    var contactInput = document.getElementById("contact");
    var contactValue = contactInput.value;

    // Check if contact starts with '9' and has a maximum of 10 digits
    if (!/^[9]\d{9}$/.test(contactValue)) {
        alert("Contact must start with '9' and be exactly 10 digits long.");
        return false;
    }

    // Validate date of birth to ensure the user is at least 18 years old
    var dobInput = document.getElementById("DOB");
    var dobValue = new Date(dobInput.value);
    var today = new Date();
    var minAge = 18;
    var minAgeDate = new Date(today.getFullYear() - minAge, today.getMonth(), today.getDate());

    if (dobValue > minAgeDate) {
        alert("You must be at least 18 years old to submit this form.");
        return false;
    }

    return true;
}

        // function validateContact() {
        //     var contactInput = document.getElementById("contact");
        //     var contactValue = contactInput.value;
        //     var contactError = document.getElementById("contactError");

        //     // Check if contact starts with '9' and has a maximum of 10 digits
        //     if (!/^[9]\d{0,9}$/.test(contactValue)) {
        //         contactError.style.display = "block";
        //     } else {
        //         contactError.style.display = "none";
        //     }
        // }

        // function validateForm() {
        //     var contactInput = document.getElementById("contact");
        //     var contactValue = contactInput.value;

        //     // Check if contact starts with '9' and has a maximum of 10 digits
        //     if (!/^[9]\d{9}$/.test(contactValue)) {
        //         alert("Contact must start with '9' and be exactly 10 digits long.");
        //         return false;
        //     }

        //     return true;
        // }
    </script>

<body>
    <h1>Blood Donation Form</h1>
    <form id="donationForm" action="confirm_donation.php" method="post" onsubmit="return validateForm()">
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
        
        <label for="DOB">Date Of Birth:</label>
        <input type="date" id="DOB" name="DOB"  required><br><br>

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

        <?php 
        session_start();
        $email=$_SESSION['email'];
        $currentDate = date('Y-m-d');
         
         ?>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>


        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" name="contact" oninput="validateContact()" required><br><br>
        <div id="contactError" class="error">Contact must start with '9' and be up to 10 digits long.</div>

        <label for="visite_date">Visite Date:</label>
        <input type="date" id="form_fill_date" name="form_fill_date" min="<?php echo $currentDate; ?>" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
