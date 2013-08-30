<pre>
<?php

require_once('db.php');

print_r($_POST);

$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$size = mysql_real_escape_string($_POST['size']);
$number = mysql_real_escape_string($_POST['number']);

echo $name.'\n'.$email.'\n'.$size.'\n'.$number;

echo "INSERT INTO shirts values('{$name}', '{$email}', '{$size}', '{$number}')";// or die('Could not insert');
mysql_query("INSERT INTO shirts values('{$name}', '{$email}', '{$size}', '{$number}')") or die('Could not insert');

header("Location: index.php");

?>
</pre>
