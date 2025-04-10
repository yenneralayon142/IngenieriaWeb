<?php
interface UserRepositoryInterface {

    /**
     * Busca un usuario por su ID.
     * 
     * Este método debe ser implementado para buscar un usuario en el almacenamiento por su identificador único.
     *
     * @param int $id El ID del usuario a buscar.
     * @return User|null El objeto User correspondiente al ID, o null si no se encuentra.
     */
    public function find($id);

    /**
     * Obtiene todos los usuarios.
     * 
     * Este método debe ser implementado para obtener todos los usuarios almacenados en el repositorio.
     *
     * @return array Un arreglo de objetos User.
     */
    public function all();

    /**
     * Guarda un usuario en el repositorio.
     * 
     * Este método debe ser implementado para guardar un nuevo usuario o actualizar uno existente en el repositorio.
     *
     * @param User $user El objeto User que se desea guardar.
     * @return void
     */
    public function save($user);

    /**
     * Elimina un usuario por su ID.
     * 
     * Este método debe ser implementado para eliminar un usuario en el repositorio usando su identificador único.
     *
     * @param int $id El ID del usuario a eliminar.
     * @return void
     */
    public function delete($id);
}
?>