<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['name'];

if (empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail('ashutoshdengri@gmail.com', "WEBSITE MESSAGE", $message, "Form:: $name <$email>");
    echo "<script type='text/javascript'>alert('your message has been sent. Thank you!');
    windows.history.log(-1);
    </script>";
}
?>