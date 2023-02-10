<?php

namespace DAO;
require "./Autoload.php";
use Model\PessoaModel;

class PessoaDAO{

    private \PDO $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=mvc";
        $this->conexao = new \PDO($dsn, "root", "");
    }

    public function atualizarCadastro(PessoaModel $model){
        $stmt = $this->conexao->prepare("update pessoas set nome = :nome, email = :email, senha = :senha where id = :id limit 1");
        $encrypt = password_hash($model->senha, PASSWORD_DEFAULT);
        $stmt->bindParam(":nome",$model->nome);
        $stmt->bindParam(":email",$model->email);
        $stmt->bindParam(":senha",$encrypt);
        $stmt->bindParam(":id",$model->id);
        $stmt->execute();
    }

    public function buscarDadosPorId(PessoaModel $model){
        $stmt = $this->conexao->prepare("select * from pessoas where id = :id");
        $stmt->bindParam(":id", $model->id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function buscarTodosOsRegistros(){
        $stmt = $this->conexao->prepare("select * from pessoas");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deletarPessoa(PessoaModel $model){
        $stmt = $this->conexao->prepare("delete from pessoas where id = :id limit 1");
        $stmt->bindParam(":id",$model->id);
        $stmt->execute();
    }

    public function create (PessoaModel $model){
        $stmt = $this->conexao->prepare("insert into pessoas values (default, :nome, :email, :senha)");
        $encrypt = password_hash($model->senha, PASSWORD_DEFAULT);
        $stmt->bindParam(":nome",$model->nome);
        $stmt->bindParam(":email",$model->email);
        $stmt->bindParam(":senha",$encrypt);
        $stmt->execute();
    }
}
