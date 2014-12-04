<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: www.postmobapp.com';
    $to = 'postmobapp@gmail.com';
    $subject = 'Contact';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location
        echo '<p>Thank you for your email!</p>';
    } else {
        echo '<p>Oops! An error occurred. Try sending your message again.</p>';
    }
}
?>