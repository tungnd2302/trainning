<?php 
require_once('controllers/Controller.php');
require_once('models/categories.php');
	class CategoriesController extends Controller{
		public function list(){
			$categoriesModel = new categories;
			$categories = $categoriesModel->getAll();
			require_once('views/categories/list.php');
		}
	}
?>