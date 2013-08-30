<?php

$server="localhost";
$user="buzz";
$password="ugbuzz2k11";
$database="buzz";

$connection = mysql_connect($server, $user, $password) or die("Could not connect");

mysql_select_db("buzz", $connection) or die("Could not select db");

/*$result=mysql_query("SELECT * FROM shirts") or die("Could not query");;

while($row = mysql_fetch_array($result, MYSQL_NUM)){
                foreach($row as $attribute){
                                        echo $attribute."<br />";
                                                }
                        }

 */
?>
