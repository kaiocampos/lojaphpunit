<?php
namespace LOJA\API;
use LOJA\DAO\DAOUsuario;

class UsuarioListar{
    public $lista;

    public function __construct() {
          
        $obj = new DAOUsuario();
        $this->lista = $obj->listaUsuarios();
    }
}
?>