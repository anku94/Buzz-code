<pre>
<?php

session_start();

require_once('db.php');
require_once('recaptchalib.php');
/*$publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_" ;

$captcha = False;
$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$message = mysql_real_escape_string($_POST['message']);

if(!$captcha){
  echo "Captcha";
  echo recaptcha_get_html($publickey);
  $captcha=True;
}
else{
  $privatekey = "6Lej6tYSAAAAACGTAxhwgwV7SbQQtjgeRVXH2jQu";
  $resp = recaptcha_check_answer ($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);
  if(!$resp->is_valid){
    $captcha = False;

 */

  

//echo $name.'\n'.$email.'\n'.$message.'\n';
  echo "Muhawhawhaw";
  print_r($_SESSION);

  //echo "INSERT INTO feedback values('{$name}', '{$email}', '{$message}')";// or die('Could not insert');
  //mysql_query("INSERT INTO feedback values('{$name}', '{$email}', '{$message}')") or die('Could not insert');
  //mysql_query("INSERT INTO shirts values('{$name}', '{$email}', '{$size}', '{$number}')") or die('Could not insert');

  //header("Location: index.php");
  if(isset($_POST["recaptcha_response_field"])){
    //Captcha has been submitted
    echo "Got response.";
    print_r($_POST);
    require_once('recaptchalib.php');
    $privatekey = "6Lej6tYSAAAAACGTAxhwgwV7SbQQtjgeRVXH2jQu";
    echo "Test1";
    $resp = recaptcha_check_answer($privatekey,
      $_SERVER["REMOTE_ADDR"],
      $_POST["recaptcha_challenge_field"],
      $_POST["recaptcha_response_field"]);
    echo "Test1";
    print_r($resp);
    echo "Test2";
    if(!$resp->is_valid){
      echo "Invalid captcha";
    }
    else{
      echo "Valid captcha";
    }

  }
  else{
    //Display captcha
?>
<form method="post" action="new.php">
        <?php
          require_once('recaptchalib.php');
          $publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <input type="submit" />
</form>


<?php
  }

?>
</pre>
