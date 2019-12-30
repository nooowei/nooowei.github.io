<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required

    //gmail won't work automatically
    $email_to = "weixueternal@hotmail.com"; 
    
    $headers = "From: ".$email_from;
    $txt = "You got a message from: ".$name.".\n\n".$message;

    mail($email_to, $subject, $txt, $headers);

    header("Location: contact.html?mailsend");
  } 

?>