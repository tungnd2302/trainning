<?php 
require_once('controllers/Controller.php');
require_once('models/products.php');
	class ProductsController extends Controller{
		public function list(){
			$productsModel = new products;
			$products = $productsModel->getAll();
			require_once('views/products/list.php');
		}

		public function create(){
			require_once('views/products/create.php');
		}
	}
?>