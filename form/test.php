<?php
// Assuming you have already connected to your MySQL database

// Prepare the SQL query to fetch the last row from the patient table
include('../conn.php');
$sql = "SELECT patientID FROM patient ORDER BY patientID DESC LIMIT 1";
$sqll = "SELECT DonerID FROM donor ORDER BY DonerID DESC LIMIT 1";
// $sql = "SELECT patientID FROM patient LIMIT 1";

// Execute the query
$result = mysqli_query($conn, $sql);
$resultt = mysqli_query($conn, $sqll);

// Check if the query executed successfully
if ($result) {
    // Fetch the data from the result
    $row = mysqli_fetch_assoc($result);

    // Check if a row was fetched
    if ($row) {
        // Access the fields of the last row
        $patientID = $row['patientID'];

        // Add more fields as needed
        $patientID = (int)$patientID;
        $patientID++;

        // Now you can use the fetched data as needed
        // echo "Patient ID: " . $patientID+1 . "<br>";
        // echo "Name: " . $name . "<br>";
        // echo "Date of Birth: " . $dob . "<br>";
        // Output additional fields here
    } 
    // else {
    //     echo "No data found in the patient table.";
    // }

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}


//for doner

if ($resultt) {
    // Fetch the data from the result
    $row = mysqli_fetch_assoc($resultt);

    // Check if a row was fetched
    if ($row) {
        // Access the fields of the last row
        $donorID = $row['DonerID'];

        // Add more fields as needed
        $donorID = (int)$donorID;
        $donorID++;

        // Now you can use the fetched data as needed
        // echo "Patient ID: " . $patientID+1 . "<br>";
        // echo "Name: " . $name . "<br>";
        // echo "Date of Birth: " . $dob . "<br>";
        // Output additional fields here
    } else {
        echo "No data found in the patient table.";
    }

    // Free the result set
    mysqli_free_result($resultt);
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}
// Close the connection
mysqli_close($conn);
