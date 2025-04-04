<?php
class Usuario{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function saludar(){
        return "Hola mi nombre es " .$this->nombre;
    }
}

$usuario1 = new Usuario("Yenner");
echo $usuario1->saludar();

class Usuario2{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function saludar(){
        return "Hola mi nombre es ". $this->nombre;
    }
}

// Herencia

class Usuario3 extends Usuario2{
    public $job;

    public function __construct($nombre,$job)
    {
        parent::__construct($nombre);
        $this->job = $job;
    }

    public function job(){
        return parent::saludar() . "y trabajo como: ". $this->job;
    }
}

$user = new Usuario3("David","Desarrollador");
echo $user->job();


?>