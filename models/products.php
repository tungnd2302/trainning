<?php 
	require_once('models/model.php');
	class products extends model{
		public function getAll(){
			$con = $this->connection();
			$querySelect = "Select * from tblproducts";
			$result = mysqli_query($con,$querySelect);
			$products = [];
			if(mysqli_num_rows($result) > 0){
				$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
			}
			return $products;
		}
	}

?>