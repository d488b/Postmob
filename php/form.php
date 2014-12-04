<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: www.postmobapp.com';
    $to = 'postmobapp@gmail.com';
    $subject = 'Contact';
    $location = '../HTML/contact.html';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if(mail ($to, $subject, $body, $from)){ 
    header('Location: http://www.postmobapp.com/contactsuccess.html');}  
    
?>

/*<?php
//if ($_POST['submit']) {

    if (mail ($to, $subject, $body, $from)) {
        header('Location: http://www.postmobapp.com/contact.html');
        # echo '<p>Thank you for your email! </p>';
    } else {
        echo '<p>Oops! An error occurred. Try sending your message again.</p>';
    }
//}
?>*/