<?php 
if(isset($_POST['submit'])){
    $to = "almeidatabita@gmail.com"; // this is your Email address
    $from = $_POST['name']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contato Site Tábita";
    $message = $name . " " . " escreveu:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Email sended. Thank you " . $name . ", I'll get in touch soon as possible.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>