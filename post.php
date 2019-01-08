<?php
$file = fopen("~/public_html/h5/files/messages", 'a');

fprintf($file,"%s\n", date("-----M t Y h:i:s A------"));
 $name = isset($_POST['name']) ? strip_tags($_POST['name']) : "Not sent";
$subject = strip_tags(isset($_POST['subject'])) ? $_POST['subject'] : "Not sent";
$priority= strip_tags(isset($_POST['priority'])) ? $_POST['priority'] : "Not sent";
$message= strip_tags(isset($_POST['message'])) ? $_POST['message'] : "Not sent";
fprintf($file, "Name: %s\n",$name);
fprintf($file, "Subject: %s\n",$subject);
fprintf($file, "Priority: %s\n",$priority);
fprintf($file, "Message: %S\n", $message);
fclose($file);
?>
