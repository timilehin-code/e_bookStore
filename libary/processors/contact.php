<?php
    $destination  = "oluwatimilehintawose2005@gmail.com";

    $form_name    = $_POST['form_name'];
    $form_email    = $_POST['form_email'];
    $form_subject    = $_POST['form_subject'];
    $form_phone    = $_POST['form_phone'];
    $form_message    = $_POST['form_message'];


    $message = "Hello!
    You have a message:
    Name: $form_name
    Email: $form_email
    Subject: $form_subject
    Phone: $form_phone
    Message: $form_message
    ";
    $headers = "From: $form_email";
    mail($destination, $form_subject, $message, $headers);
    
    echo'<script>alert("Message sent successfully");window.location.assign("../public/contact.php")</script>';
    
    /* Let's prepare the message for autoresponder */

    
    $headersAutoRep = " Tolemgcl  : $form_email";
    $subjectAutoRep =   "Contact Form";
    $messageAutoRep =   "Thank you for reaching out to us. We will get back to you shortly.";
    mail($headersAutoRep, $subjectAutoRep, $messageAutoRep);



?>