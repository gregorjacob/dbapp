<?php

require "connect.inc.php";

if(isset($_POST['username'])&& isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if(!empty($username)&&!empty($password))
	{  
		$query = "SELECT `id` FROM `registration` WHERE `username`='$username'";
		if($query_run = mysql_query($query))
		{
	     
			$query_num_rows= mysql_num_rows($query_run);
			
			if($query_num_rows==0)
			{
				echo"invalid";
				
				
			}
			else
			{
                          $user_id  =mysql_result($query_run,0,'id');
                          echo $user_id;
                          $_SESSION['user_id']=$user_id;
                          header('location:index.php');


				
				
			}
			
		}
		
		
		
		
		
	}
	else
	{
		echo" you must enter the fields";
	}
	
	
	
	
}




?>

<form action="<?php echo $current_file; ?>" method ="POST">
username:<input type="text" name="username">password:<input type="password" name="password">
<input type ="submit" value ="login">







</form>