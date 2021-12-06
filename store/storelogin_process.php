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
			
			$q="select * from stores where store_username='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
    
			
			if(!empty($row))
			{
				if($_POST['pass_word']==$row['store_password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['store_username'];
					$_SESSION['uid']=$row['store_password'];
					$_SESSION['status']=true;
					
                    // $query = "select store_id, store_name from stores where store_username = $unm";
                    // $result = mysqli_query($conn, $query);
                    // $final = mysqli_fetch_assoc($result);
                    // $id = $final['store_id'];
                    // $n = $final['store_name'];
                    header("location:index.php");
					
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