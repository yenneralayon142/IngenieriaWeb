<?php

require_once '../Repositories/UserRepository.php';

class UserService {

    private $repository;

    /**
     * Constructor de la clase UserService.
     * 
     * @param UserRepositoryInterface $repository Instancia del repositorio que implementa la interfaz UserRepositoryInterface.
     */
    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository; 
    }

    /**
     * Obtiene un usuario por su ID.
     * 
     * Este método interactúa con el repositorio para obtener los datos del usuario con el ID proporcionado.
     *
     * @param int $id El ID del usuario a buscar.
     * @return User|null El objeto User correspondiente al ID dado, o null si no se encuentra.
     */
    public function getUser($id) {
        return $this->repository->find($id);
    }

    /**
     * Obtiene la lista de todos los usuarios.
     * 
     * Este método interactúa con el repositorio para obtener todos los usuarios almacenados.
     *
     * @return array Lista de objetos User.
     */
    public function listUser() {
        return $this->repository->all();
    }
}

?>