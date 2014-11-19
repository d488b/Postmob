<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo';
    $to = 'info@postmobapp.com';
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    }
    if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($human == '4') {
                if (mail ($to, $subject, $body, $from)) {
    	        echo '<p>Your message has been sent!</p>';
    	    } else {
    	        echo '<p>Something went wrong, go back and try again!</p>';
    	    }
    	}
        } else {
            echo '<p>You need to fill in all required fields!!</p>';
        }
    }
?>