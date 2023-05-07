<?php
$name = $_POST['name'];
$maiL= $_POST['mail'];
$sub = $_POST['sub'];
$message = $_POST['message'];

@mail_from = 'affiliatekiran@gmail.com';

@mail_sub = 'New form submission';

@mail_body = "User Name : $name.\n".
              "User Mail : $mail.\n".
              "User Subject : $sub.\n".
              "User Message : $message.\n";

@to = 'iamamadscientistkk@gmail.com';

@headers = "From : @mail_from \r\n";

@headers . = "Reply To : @mail\r\n";

mail($to,$mail_from,@mail_body);

header("Locatio: contact.html")


?>