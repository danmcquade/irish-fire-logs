<?php
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: contact.php"); exit;
}
$name = $_POST["name"];
$email_address = $_POST["email"];
$company = $_POST["company"];
$phone = $_POST["phone"];
$message = $_POST["message"];
// check that a name was entered
// if (emptyempty($name))
//     $error = "You must enter your name.";
// check that an email address was entered
// elseif (emptyempty($email_address))
//     $error = "You must enter your email address.";
// check for a valid email address
// elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))
//     $error = "You must enter a valid email address.";
// check that a message was entered
// elseif (emptyempty($message))
//     $error = "You must enter a message.";
// check if an error was found - if there was, send the user back to the form
// if (isset($error)) {
//     header("Location: contact-form.php?e=".urlencode($error)); exit;
// }
// write the email content
$headers .= 'From: Irish Fire Logs <web@irishfirelogs.com>' . "\r\n";
$email_content = "Name:\t\t\t$name\n";
$email_content .= "Email Address:\t   $email_address\n";
$email_content .= "Company Name:\t   $company\n";
$email_content .= "Phone Number:\t   $phone\n\n";
$email_content .= "Message:\n\n$message";
// send the email
mail ("info@ballydesmondco.com", "New Irish Fire Web Submission", $email_content, $headers);
// send the user back to the form
header("Location: contact-success.php"); exit;
?>