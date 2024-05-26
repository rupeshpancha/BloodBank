<?php
// Define the start date
$start_date_str = '2010-10-20';

// Create a DateTime object from the start date string
$start_date = new DateTime($start_date_str);

// Clone the start date object to get the end date
$end_date = clone $start_date;

// Add 60 days to the end date
$end_date->modify("+60 days");

// Calculate the difference between the start date and the end date
$interval = $start_date->diff($end_date);

// Display the result
echo "<p>Start Date: " . $start_date->format('Y-m-d') . "</p>";
echo "<p>End Date: " . $end_date->format('Y-m-d') . "</p>";
echo "<p>Difference: " . $interval->format('%y years, %m months, %d days') . "</p>";
?>
