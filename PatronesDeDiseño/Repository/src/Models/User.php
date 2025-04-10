<?php
class User {
    public $id;
    public $nombre;

     /**
     * Constructor de la clase User
     * @param int $id - Identificador único del usuario
     * @param string $nombre - Nombre del usuario
     */
    
    function __construct($id,$nombre)
    {   
        $this->id = $id;
        $this->nombre = $nombre;
    }
}
?>