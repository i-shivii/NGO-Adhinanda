<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `contact_data`(`fname` , `lname` , `email` , `phone`) VALUES ('" . $fname . "' ,' " . $lname . "' ,' " . $email . "' , '" . $phone . "')";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submittijlly your Query";
$mysqli->close();


?>