<?php
    require_once 'UserRepositorieInterface.php';
    
    class UserRepository implements UserRepositoryInterface {
        private $users = [];

        public function __construct()
        {
            $this->users = [
                1 => ['id' => 1, 'name' => 'Andres'],
                2 => ['id' => 2, 'name' => 'Yenner']
            ];
        }

        public function find($id){
            return $this->users[$id] ?? null;
        }

        public function all(){
            return array_values($this->users);
        }

        public function save($user) {
            $this->users[$user['id']] = $user;
            return true;
        }

        public function delete($id){
            unset($this->users[$id]);
            return true;
        }
    }
?>