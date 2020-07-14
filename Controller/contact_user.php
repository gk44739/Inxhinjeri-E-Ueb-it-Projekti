<?php
require('../Model/contact_form_repository.php');

$subject = $_POST["subject"];
$email = $_POST["email"];
$attachment = $_FILES['attachment']['name'];
$message = $_POST["message"];

if(isset($subject) && isset($email) && isset($attachment) && isset($message)){
    $photo_main_target = "../View/attachment/".basename($attachment);
    move_uploaded_file($_FILES['attachment']['tmp_name'], $photo_main_target);
    $contact_form = new Contact_Form($subject,$email,$attachment,$message);
    if(create($contact_form)){
        echo "<script>alert(\"Thank you for your feedback!\");</script>";
        header("location: ../View/contact.php");
    }else{
        echo "<script>alert(\"Error sending message!\")</script>";
    }
}else{
    echo "Not set";
}
?>