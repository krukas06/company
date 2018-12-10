<?php
namespace App\Repository;

use App\User;

class UsersRepository extends Repository{

	public function __construct(User $users){

		$this->model=$users;

	}

}

?>