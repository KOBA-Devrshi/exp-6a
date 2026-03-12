<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];

$hobbies = "";
if(isset($_POST['hobby']))
{
$hobbies = implode(", ", $_POST['hobby']);
}

echo "<h2>Registration Details</h2>";

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br>";
echo "Gender: " . $gender . "<br>";
echo "DOB: " . $dob . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Address: " . $address . "<br>";
echo "Country: " . $country . "<br>";
echo "Hobbies: " . $hobbies . "<br>";

?>
