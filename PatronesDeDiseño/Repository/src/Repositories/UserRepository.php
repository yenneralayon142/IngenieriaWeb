<?php
    require_once 'UserRepositoryInterface.php';
    
    class UserRepository implements UserRepositoryInterface {
        private $users = [];
<<<<<<< HEAD

=======
>>>>>>> main
        public function __construct()
        {
            $this->users = [
                1 => ['id' => 1, 'name' => 'Andres'],
                2 => ['id' => 2, 'name' => 'Yenner'],
                3 => ['id' => 3, 'name' => 'Stiven']
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