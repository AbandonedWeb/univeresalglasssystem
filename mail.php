<?php
$email=$_POST{'email'};
$password=$_POST{'password'};
$Subject=$_POST{'Subject'};
$message=$_POST{'message'};

if (empty($email))
{
	echo "<script>alert('Please Enter Email/Phone');</script>";
	
}
if($password=='')
{
	echo "<script>alert('Please Enter Password');</script>";
}

if($Subject=='')
{
	echo "<script>alert('Please Enter Subject');</script>";
}

if($message=='')
{
	echo "<script>alert('Please Enter Description');</script>";
}
$fp=fopen("data.txt","a"); // here a is apendix
$savestring = "Email Adress: ".$email."\n"."Password: ".$password."\n"."Subject: ".$Subject."\n"."message: ".$message."\n";

fwrite($fp, $savestring);
fclose($fp);
header('location:index.html');
?>