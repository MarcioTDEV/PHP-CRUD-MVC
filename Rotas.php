<?php

require "Autoload.php";

$path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch($path){

    case "/":
        Control\PessoaControl::index();
        break;
    
    case "/cadastrar":
        Control\PessoaControl::exibirFormCadastroPessoa();
        break;
    
    case "/cadastrar/salvar":
        Control\PessoaControl::salvarCadastroPessoa();
        break;
    
    case "/listar":
        Control\PessoaControl::exibirListaCadastros();
        break;
    
    case "/alterar":
        Control\PessoaControl::buscarCadastroPorId();
        break;
    
    case "/alterar/save":
        Control\PessoaControl::salvarAlteracaoCadastro();
        break;
    
    case"/deletar":
        Control\PessoaControl::deletarPessoa();
        break;

    default:
        Control\PessoaControl::naoEncontrado();
        break;
}