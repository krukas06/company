<?php
namespace App\Repository;

use App\Product;

class ProductsRepository extends Repository{

	public function __construct(Product $products){

		$this->model=$products;

	}

}

?>