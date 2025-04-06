<?php

require_once '../Repositories/UserRepository.php';

class UserService {

    private $repository;
<<<<<<< HEAD

=======
>>>>>>> main
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