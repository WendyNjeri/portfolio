<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the form fields are set in the POST data
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  $message = isset($_POST["message"]) ? $_POST["message"] : "";
  $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
}


 //print_r($_POST); 

$host = "localhost";
$dbname = "wendy_portfolio";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO reachout (name, email,	message, phone)
        VALUES (?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
  die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $message, $phone);

mysqli_stmt_execute($stmt);


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

 $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->CharSet = 'utf-8';

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "wendy.njeri@students.jkuat.ac.ke"; /* Auto MailUsername & Password */
$mail->Password = "0746214858WendyNjeri";

$mail->setFrom("wendynjerim@gmail.com.com.tr", "Maintainance Team");
$mail->addAddress("Wendy.njeri@students.jkuat.ac.ke", "Wendy Njeri");

$mail->Subject = "New Contact";
$mail->Body = "New Form Information Contact Reached Out Through:"."\nname: ".$name."\nEmail: ".$email."\nSubject: ".$message."\nContact number: ".$phone."\n";

$mail->send();


header("Location: send.html")


?> 