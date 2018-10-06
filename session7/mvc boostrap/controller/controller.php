<?php 
	include 'model/model.php';
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add-user':
					$model = new Model();
					$userdata = $model->getAdduser();

					include 'view/add-user.php';
					break;
				case 'list-user':
					$model = new Model();
					$listuserdata = $model->getListuser();

					include 'view/list-user.php';
					break;
				
				case 'add-product':
					$model = new Model();
					$productdata = $model->getAddproduct();

					include 'view/add-product.php';
					break;
				case 'list-product':
					$model = new Model();
					$listproductdata = $model->getListproduct();
					
					include 'view/list-product.php';
					break;
				
				default:
					# code...
					break;
			}

		}
	}
?>