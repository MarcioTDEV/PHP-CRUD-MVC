<?php

namespace Model;

require "./Autoload.php";
use DAO;

class PessoaModel{
    public string $id, $nome, $email, $senha;

    public array $dados;

    public function AtualizarPessoa(){
        $dao = new DAO\PessoaDAO();
        $dao->atualizarCadastro($this);
    }

    public function buscarPessoa (){
        $dao = new DAO\PessoaDAO();
        $this->dados = $dao->buscarDadosPorId($this);
    }

    public function deletarPessoa (){
        $dao = new DAO\PessoaDAO();
        $dao->deletarPessoa($this);
    }

    public function exibirTodosOsDadaos(){
        $dao = new DAO\PessoaDAO();
        $this->dados = $dao->buscarTodosOsRegistros();
    }

    public function inserirCadastro (){
        $dao = new DAO\PessoaDAO();
        $dao->create($this);
}

}