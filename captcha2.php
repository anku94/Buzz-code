<html>
<head></head>
<body>
<form>
<?php
  require_once('recaptchalib.php');
  $publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
  //echo "Muhawhawahw";

?>
</form>
</body>
</html>
