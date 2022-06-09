<?php
require_once 'Database.php';

class UsuarioDAO
{
    private $conexao;

    /**
     * @param $conexao
     */
    public function __construct()
    {
        $Database = new Database();
        $this->conexao = $Database->getConexao();
    }

    function store($user) {
        $stmt = $this->conexao->prepare("INSERT INTO users (user,pass) VALUES (:user, :pass) ");
        $stmt->bindValue(':user', $user->getUser());
        $stmt->bindValue(':pass', $user->getPass());
        return $stmt->execute();
    }

    function login($user) {
        $stmt = $this->conexao->prepare("SELECT * FROM users WHERE user = :user AND pass = :pass");
        $stmt->bindValue(':user', $user->getUser());
        $stmt->bindValue(':pass', $user->getPass());
        $stmt->execute();
        if(count($stmt->fetchAll()) >= 1) {
            return true;
        }
        return false;
    }



}