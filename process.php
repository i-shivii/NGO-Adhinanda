<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `adhinanda_ngo`(`prenom` , `email` , `adresse` , `phone` , `message`) VALUES ('" . $prenom . "' ,' " . $email . "' ,' " . $adresse . "' , '" . $phone . "' , '" . $message . "')";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submitting your Query";
$mysqli->close();


?>