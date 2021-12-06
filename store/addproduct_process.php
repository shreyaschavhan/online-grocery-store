<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['product_name']) || empty($_POST['product_catID']) || empty($_POST['product_name']) || empty($_POST['product_price'])|| empty($_POST['product_brand']) || empty($_POST['product_image']) || empty($_POST['product_section']))
		{
			$msg[]="Incomplete Form";
		}
		if(!(is_numeric($_POST['product_catID'])))
		{
			$msg[]="Product Category ID must be a number";
		}
		if((is_numeric($_POST['product_name'])))
		{
			$msg[]="Product name couldn't be a number";
		}
		if((is_numeric($_POST['product_brand'])))
		{
			$msg[]="Product brand couldn't be a number";
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
			
			$p_img = $_POST['product_image'] ;	
            $p_name = $_POST['product_name'];
			$p_categoryID=$_POST['product_catID'];
			$p_brand=$_POST['product_brand'];
			$p_section=$_POST['product_section'];
			$p_price = $_POST['product_price'];
            $p_storeID = $_POST['store_id'];
			
			
		
			
			$query="insert into products(product_categoryID,product_name,product_storeID,product_brand,product_price,product_section,product_image) values('$p_categoryID','$p_name','$p_storeID','$p_brand','$p_price','$p_section', '$p_img')";
			
			mysqli_query($conn,$query) or die("Can't Connect to DB...");
			header("location:add_products.php?ok=1");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	