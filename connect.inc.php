<?php

$mysql_host = 'localhost';
 
$mysql_user =  'id6400600_root';
$mysql_pass = 'password';
$mysql_db ='id6400600_gorgor';
mysql_select_db($mysql_db);

mysql_connect($mysql_host,$mysql_user ,$mysql_pass);
if( mysql_connect($mysql_host,$mysql_user ,$mysql_pass)&&mysql_select_db($mysql_db))
{


}

?>



