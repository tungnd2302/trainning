<?php 
	require_once('models/model.php');
	class categories extends model{
		public function getAll(){
			$con = $this->connection();
			$querySelect = "Select * from tblproducts";
			$result = mysqli_query($con,$querySelect);
			$categories = [];
			if(mysqli_num_rows($result) > 0){
				$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
			}
			return $categories;
		}
	}

?>