<?php

// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

// Open the file in append mode
$file = fopen('data.txt', 'a');

// Write the data to the file
fwrite($file, $name . ' ' . $email . ' ' . $address . ' ' . $city . ' ' . $state . ' ' . $zipcode . "\n");

// Close the file
fclose($file);

// Redirect the user back to the form
header('Location: index.html');

?>
