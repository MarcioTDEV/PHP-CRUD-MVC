<?php
namespace Control;

require "./Autoload.php";
use Model;


class PessoaControl{


    public static function deletarPessoa (){
        $model = new Model\PessoaModel();
        $model->id = $_POST['id'];
        $model->deletarPessoa();
        header("Location: /listar");
    }

    public static function salvarAlteracaoCadastro(){
        $model = new Model\PessoaModel();
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->id = $_POST['id'];
        $model->AtualizarPessoa();
        header("Location: /listar");

    }



    public static function index (){
        require "View/Home.php";
    }
    
    public static function buscarCadastroPorId (){
        $model = new Model\PessoaModel();
        $model->id = $_POST['id'];
        $model->buscarPessoa();
        $items = $model->dados;
        print_r($_POST['id']);
        require "View/Pessoa/AtualizarPessoa.php";
    }

    public static function salvarCadastroPessoa(){
        $model = new Model\PessoaModel();
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->inserirCadastro();
        header("Location: /listar");
        

    }

    public static function exibirFormCadastroPessoa (){
        require "View/Pessoa/CadastrarPessoa.php";
        
    }

    public static function exibirListaCadastros (){
        $model = new Model\PessoaModel();
        $model->exibirTodosOsDadaos();
        $items = $model->dados;
        require "View/Pessoa/ListarPessoas.php";
    }

    public static function naoEncontrado(){
        require "View/NaoEncontrado.php";
    }
}