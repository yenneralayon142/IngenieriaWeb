<?php

require_once 'UserRepository.php'

class UserService {

    private $repostory;


    public function __construct (UserRepositoryInterface $repostory) {
        $this->repository = $repostory; 
    }

    public function getUser ($id) {
        return $this->repository->find($id);
    }

    public function listUser (){
        return $this->repository->all();
    }
}

?>