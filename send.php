<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment =$_POST['comment'];

$to = "sagar7p@gmail.com"
$subject = "Contact Form";
$body = "Name: $name \n Email: $email \n Message: $comment";

mail($to,$subject,$body);

echo "Message Sent! <a href='contact.html'>Click Here</a> to send another email";
/*if(isset($_POST['submit'])) {
	$msg = 'Name: ' .$_POST['name'] ."\n"
			.'Email: ' .$_POST['email'] ."\n"
			.'Message: ' .$_POST['comment'] ."\n"
	mail('sagar7p@gmail.com','Contact Form', $msg);*/
}
?>