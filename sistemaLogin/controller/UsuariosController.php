<?php
require_once 'model/Usuario.php';
require_once 'model/UsuarioDAO.php';

class UsuariosController
{
    private $usuario;
    private $usuarioDao;


    public function store() {
        $this->usuarioDao = new UsuarioDAO();
        $this->usuario = new Usuario();

        $this->usuario->setUser($_REQUEST['user']);
        $this->usuario->setPass($_REQUEST['pass']);

        if ($this->usuarioDao->store($this->usuario)) {
            $_REQUEST['sucesso'] = true;
            require_once 'view/cadastro.php';
        }
    }


    public function login() {

        $this->usuarioDao = new UsuarioDAO();
        $this->usuario = new Usuario();

        $this->usuario->setUser($_REQUEST['user']);
        $this->usuario->setPass($_REQUEST['pass']);

        if ($this->usuarioDao->login($this->usuario)){
            $_REQUEST['sucesso'] = true;
            require_once 'view/home.php';
        } else {
            echo "<h2 style='color:red;'>Erro ao efetuar o login</h2>";
            echo  "<a href='/sistemaLogin/view/login.php'>Tente efetuar Login novamente</a>";

        }

    }

}