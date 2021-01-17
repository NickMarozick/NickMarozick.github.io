<?php
  $name = $_Post['name'];
  $email_from=$_POST['email'];
  $subject=$_POST['subject']
  $message= $_POST['message'];

  $to = "nmarozick@gmail.com"; 

  $email_body="";
  
  $email_bod.="User Name: ".$name."\r\n";
  $email_bod.="User Email:." $email."\r\n";
  $email_bod.="Subject: ".$subject."\r\n";
  $email_bod.="User Message: ".$message."r\n";

  

  mail($to,$subject,$email_body);
  #header("Location: index.html");
  ?>
