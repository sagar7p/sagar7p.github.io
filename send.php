<?php
if(isset($_POST['submit'])) {
	$msg = 'Name: ' .$_POST['name'] ."\n"
			.'Email: ' .$_POST['email'] ."\n"
			.'Message: ' .$_POST['comment'] ."\n"
	mail('sagar7p@gmail.com','Contact Form', $msg);
}
?>