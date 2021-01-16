<? php
  $name = $_Post['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject']
  $message= $_POST['message'];
  

  $email_from=$email;
  $email_body="User Name: $name.\n".
              "User Email: $email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

  $to = "nmarozick@gmail.com"; 

  $headers = "From: $email_from \r\n";

  mail($to,$subject,$email_body,$header);
  header("Location: index.html");
  ?>
