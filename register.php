<?php
$username='';
$firstname='';

require "core.inc.php";
require "connect.inc.php" ;

if(!logg())
{
if( isset($_POST['username'])&& isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&& isset($_POST['account']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];
$firstname=$_POST['firstname'];
$account=$_POST['account'];
if(!empty($username)&& !empty($password)&& !empty($password_again)&& !empty($firstname)&& !empty($account))
{
  if($password!=$password_again)
  {
    echo "passwords do not match" ;
  }
  
  else
  {
    $query="SELECT `username` FROM `registration` WHERE `username`='$username' ";
    $query_run = mysql_query($query);
    $query_num_rows= mysql_num_rows($query_run) ;
    if( $query_num_rows== 1)
    {
      echo ' The  username '.' '. $username .'  '.'already exsists';

      
    }
    else
    {
      $query="INSERT INTO `registration` VALUES('' , '". mysql_real_escape_string($username)."' , '".  mysql_real_escape_string($password)."' ,'".mysql_real_escape_string($firstname)."' ,'".mysql_real_escape_string($account)."'  )"  ;
      if($query_run=mysql_query($query))
      {
       header('location:registered.php');

        
      }
      else
      {
        echo "TRY AGAIN";
        
      }

      
    }

  }
  
  
}
else
{
echo"you must enter all the fields";



  
  
}
}


  ?>
  
<form action ="register.php"   method ="POST">
username:<br><br><input type="text" name ="username" value="<?php echo $username; ?>"><br><br>
password:<br><br><input type="password" name ="password"><br><br>
password again:<br><br><input type="password" name ="password_again"><br><br>
firstname:<br><br><input type="text" name ="firstname" value="<?php echo $firstname;?>"><br><br>
account type:<br><br><select name="account">
    <option value="user">user</option>
    <option value="admin">admin</option>
    </select><br><br>
<input type ="submit" value ="register">


<?php
}
else
{
  echo "you are already registered and logged in";

  
}
  
  
  






?>