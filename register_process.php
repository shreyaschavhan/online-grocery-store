<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['user_name']) || empty($_POST['pass_word']) || empty($_POST['confirm_password']) || empty($_POST['contact']))
		{
			$msg.=
            "
            <div class='error'> All fields are required </div>
            ";
		}
		
		if($_POST['pass_word']!=$_POST['confirm_password'])
		{
			$msg.="<div class='error'> Password not matching! Enter password again</div>";
		}
		
		if(strlen($_POST['pass_word'])>10)
		{
			$msg.="<div class='error'> Password should not be greater than 10 letters!</div>";
		}
		
        if(strlen($_POST['contact'])>10)
		{
			$msg.="<div class='error'> Mobile No. should not be greater than 10 letters!</div>";
		}
		
		if(is_numeric($_POST['name']))
		{
			$msg.="<div class='error'> Name must be a string! </div>";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['name'];
			$unm=$_POST['user_name'];
			$pwd=$_POST['pass_word'];
			$contact=$_POST['contact'];
			
			
		
			
			
			$query="insert into user(u_firstname, u_username, u_password, u_contact)
			values('$fnm','$unm','$pwd','$contact')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>