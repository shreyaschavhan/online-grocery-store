<?php
require('../includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['store_name']) || empty($_POST['store_catID']) || empty($_POST['store_category']) || empty($_POST['store_region'])|| empty($_POST['store_image']) || empty($_POST['store_username']) || empty($_POST['store_password']))
		{
			$msg[]="Incomplete Form";
		}
		if(!(is_numeric($_POST['store_catID'])))
		{
			$msg[]="Store Category ID must be a number";
		}
		if((is_numeric($_POST['store_username'])))
		{
			$msg[]="Store username couldn't be a number";
		}
		
		
		
		if(!empty($msg))
		{
			echo '<b>Error: </b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			$s_img = $_POST['store_image'] ;	
            $s_name = $_POST['store_name'];
			$s_categoryID=$_POST['store_catID'];
			$s_category=$_POST['store_category'];
			$s_region=$_POST['store_region'];
			$s_username=$_POST['store_username'];
			$s_password=$_POST['store_password'];
			
			
		
			
			$query="insert into stores(store_name,store_category,store_categoryID,store_region,store_username,store_password,store_image) values('$s_name','$s_category','$s_categoryID','$s_region','$s_username','$s_password', '$s_img')";
			
			mysqli_query($conn,$query) or die("Can't Connect to DB...");
			header("location:add_stores.php?ok=1");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	