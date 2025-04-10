<?php
class User {
    public $id;
    public $nombre;

    /**
     * Constructor de la clase User.
     * 
     * Inicializa los valores de las propiedades del objeto User.
     *
     * @param int $id El ID del usuario.
     * @param string $nombre El nombre del usuario.
     */
    function __construct($id, $nombre)
    {   
        $this->id = $id;
        $this->nombre = $nombre;
    }
}
?>