<?php

require_once 'UserRepository.php';

class UserService {

    private $repository;

    public function __construct (UserRepositoryInterface $repository) {
        $this->repository = $repository; 
    }

    public function getUser ($id) {
        return $this->repository->find($id);
    }

    public function listUser (){
        return $this->repository->all();
    }
}

?>