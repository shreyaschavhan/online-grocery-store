<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['user_name']))
		{
			$msg[]="Invalid Username or Password";
		}
		
		if(empty($_POST['pass_word']))
		{
			$msg[]="Invalid Username or Password";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$unm=$_POST['user_name'];
			
			$q="select * from user where u_username='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
    
			
			if(!empty($row))
			{
				if($_POST['pass_word']==$row['u_password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_username'];
					$_SESSION['uid']=$row['u_password'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Invalid Username or Password';
				}
			}
			else
			{
				echo 'Invalid Username or Password';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>