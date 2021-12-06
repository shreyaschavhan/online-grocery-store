<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['store_name']) || empty($_POST['store_category']) || empty($_POST['store_region']) || empty($_POST['contact']))
		{
			$msg.=
            "
            <div class='error'> All fields are required </div>
            ";
		}
		
		if(is_numeric($_POST['store_name']))
		{
			$msg.="<div class='error'> Name must be a string! </div>";
		}

        if(strlen($_POST['contact'])>10)
		{
			$msg.="<div class='error'> Mobile No. should not be greater than 10 letters!</div>";
		}
		
		if($msg!="")
		{
			header("location: store_application.php?error=".$msg);
		}
		else
		{
			$s_name=$_POST['store_name'];
			$s_category=$_POST['store_category'];
			$s_region=$_POST['store_region'];
			$contact=$_POST['contact'];
			
			
		
			
			
			$query="insert into store_application(store_name, store_category, store_region, contact)
			values('$s_name','$s_category','$s_region','$contact')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location: store_application.php?ok=1");
		}
	}
	else
	{
		header("location: ../index.php");
	}
?>