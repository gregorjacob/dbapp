<?php

require "core.inc.php";
require "connect.inc.php";

$d=getuserfield('firstname');
echo ' Welcome '.'  '.$d.'  '.'you are an ADMIN'.'                  <tb><tb>'.'<a href ="logout.php"  >logout</a> ';




?>