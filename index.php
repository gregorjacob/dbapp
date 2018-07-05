<?php
 require  "core.inc.php";
require "connect.inc.php";


if( logg())
{

  $account_type= getuserfield('account');
  if( $account_type=='user')
  {
    header('location:user.php');
  }
  else
  {
    
    header('location:admin.php');
    
  }

  
}

else
{

include "loginform.inc.php";
}
?>

<br><br>Not registered yet? <a href="register.php">click here</a>to register






