<?php
require('../includes/config.php');

if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['category_name']) || empty($_POST['category_image']))
		{
			$msg[]="Incomplete Form";
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
			
            $c_name = $_POST['category_name'];
            $c_image = $_POST['category_image'];
			
		
			
			$query="insert into category(category_name, category_image) values('$c_name','$c_image')";
			
			mysqli_query($conn,$query) or die("Can't Connect to DB...");
			header("location:add_category.php?ok=1");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>