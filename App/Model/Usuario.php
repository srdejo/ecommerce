<?php
class Usuario extends EntidadBase
{

    private $usuario;
    private $clave;
    private $rol_id;

    public function __construct()
    {
        $table = "usuarios";
        parent::__construct($table);
    }

    
}
