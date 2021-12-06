<?php session_start();

	// if(isset($_GET['product_brand']) and isset($_GET['product_name']) and isset($_GET['product_price']) and isset($_GET['product_section']) and isset($_GET['product_image']))
	// {
	// 	//add item
	// 	if ($_GET['product_price'] == "Product Price") {
	// 		$_SESSION['cart'][] = array("product_brand"=>$_GET['product_brand'],"product_name"=>$_GET['product_name'],"product_price"=>(int)$_GET['product_price'],"quantity"=>(int)$_GET['quantity'], "product_image" => $_GET['product_image']);
	// 	}
	// 	header("location: viewcart.php");
	// }
	// else if(isset($_GET['id']))
	// {
	// 	//del a item
	// 	$id = $_GET['id'];
	// 	unset($_SESSION['cart'][$id]);
	// 	header("location: viewcart.php");
	// }
	// else if(!empty($_POST))
	// {
	// 	//update quantity
	// 	foreach($_POST as $id=>$val)
	// 	{
	// 		$_SESSION['cart'][$id]['quantity']=$val;
	// 		header("location: viewcart.php");
	// 	}
	// }
	

if(isset($_GET['product_brand']) and isset($_GET['product_name']) and isset($_GET['product_price']) and isset($_GET['product_image']))
{
		//add item
		// if ($_GET['product_price'] == "Product Price") {
            
			$_SESSION['cart'][] = array("product_brand"=>$_GET['product_brand'],"product_name"=>$_GET['product_name'],"product_price"=>(int)$_GET['product_price'],"quantity"=>(int)$_GET['quantity'], "product_image" => $_GET['product_image']);
            print_r($_SESSION['cart']);
		// }
		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update quantity
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['quantity']=$val;
			header("location: viewcart.php");
		}
	}




?> 


