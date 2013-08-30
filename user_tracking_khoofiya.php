<pre>
<?php

//require_once 'CAS.php';

$logfile="lugguwuggujuggu.txt";
$ip=$_SERVER['REMOTE_ADDR'];



$logdetails= date("F j, Y, g:i a");
$user = get_current_user();
$host = gethostname();
$fp=fopen($logfile, "a");
/*if(phpCAS::isAuthenticated()){
        fwrite($fp, "Authenticated $logdetails $ip ");
        fwrite($fp, phpCAS::getUser()."\n");
}
else*/ {
        fwrite($fp, "$logdetails $ip {$user}@{$host}\n");
}
fclose();

?>
</pre>
