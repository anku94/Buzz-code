<pre>
<?php

session_start();
require_once('db.php');
require_once('recaptchalib.php');
$publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_" ;

$captcha = False;

$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$message = mysql_real_escape_string($_POST['message']);

$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['message']=$message;

echo $name.'\n'.$email.'\n'.$message.'\n';
print_r($_SESSION);

echo "INSERT INTO feedback values('{$name}', '{$email}', '{$message}')";// or die('Could not insert');
//mysql_query("INSERT INTO feedback values('{$name}', '{$email}', '{$message}')") or die('Could not insert');
//mysql_query("INSERT INTO shirts values('{$name}', '{$email}', '{$size}', '{$number}')") or die('Could not insert');

header("Location: new.php");

?>
</pre>
