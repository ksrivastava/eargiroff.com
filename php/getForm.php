<html>
<head>
  <title>Message Sent</title>
</head>
<body>
  <h2>Message Sent</h2>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'kos.srivastava@gmail.com';
  $subject = 'Message from website';
  $msg = "$name has sent you a message from your website.\n\n" . "The message: \n\n" . "$message\n";
  if (@mail($to, $subject, $msg, 'From:' . $email))
     echo 'I have received your message and will get back to you as soon as I can.<br />';
   else
  echo 'Uh oh.<br />';
?>
</body>
</html>