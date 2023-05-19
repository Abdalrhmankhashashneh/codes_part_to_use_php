<?php 

$dateString = date('y:m:d'); // Replace with your desired date

// Create a DateTime object using the provided date string
$date = new DateTime($dateString);

// Extract the month and day from the DateTime object
$month = $date->format('m'); // Two-digit representation of the month (e.g., "05" for May)
$day = $date->format('d'); // Two-digit representation of the day (e.g., "18")

// Output the extracted month and day
echo "Month: " . $month . "<br>";
echo "Day: " . $day . "<br>";


// another way 

$dateString = date('y-m-d'); // Replace with your desired date

// Explode the date string into an array
$dateParts = explode("-", $dateString);

// Extract the month and day from the date parts array
$month = $dateParts[1]; // Two-digit representation of the month (e.g., "05" for May)
$day = $dateParts[2]; // Two-digit representation of the day (e.g., "18")

// Output the extracted month and day
echo "Month: " . $month . "<br>";
echo "Day: " . $day . "<br>";