<?php

class UsuarioDao {
    private $conexao; 

    public function __construct() {
        $this->conexao = new Conexao(); //New Conexao representa a criação instancia de um objeto ? 
      }
}