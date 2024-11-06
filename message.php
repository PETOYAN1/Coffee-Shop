<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate the inputs

    if (empty($name) && preg_match('/^[a-z]*$/i', $name)) {
        echo "Name $name is not valid.\n";
    } else if (empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email address $email is not valid.\n";
    } else if (empty($phone) && preg_match('/^[a-z]*$/i', $phone)) {
        echo "Phone number $phone is not valid.\n";
    } else if (empty($message) && preg_match('/^[a-z]*$/i', $message)) {
        echo "Message is not valid.\n";
    } else {
        $receiver = 'codingnepalweb@gmail.com';
        $subject = "From: $name <$email>";
        $body = "Name : $name\nEmail : $email\nPhone : $phone\nMessage : $message";
        $sender = "From: $email";
        if(mail($receiver, $subject, $body, $sender)) {
            echo "Message is Successfully send.";
        } else {
            echo "Failed to send message.";
        }
    }
?>