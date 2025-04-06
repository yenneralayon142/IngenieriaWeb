<?php
interface UserRepositoryInterface {
    public function find($id);
    public function all();
    public function save($user);
    public function delete($id);
}
?>