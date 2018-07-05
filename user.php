<?php
require "core.inc.php";
require "connect.inc.php";

$d=getuserfield('firstname');
echo ' Welcome '.'  '.$d.'  '.'you are a USER'.'                                                         '.'<a href ="logout.php"  >logout</a> ';




?>