<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode ($usuarios);
*/


// CARREGA UM USUARIO

/*
$root = new Usuario();

$root->loadById(5);

echo $root;
*/

// CARREGA UMA LISTA

/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

// CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN

/*
$search = Usuario::search("ra");

echo json_encode($search);
*/

// CARREGA UM USUARIO USANDO O LOGIN E A SENHA
/*
$usuario = new Usuario();
$usuario->login("randal","123");

echo $usuario;
*/

// INSERT

/*
$aluno = new Usuario();

$aluno->setIdusuario("4");
$aluno->setDeslogin("Cecilia");
$aluno->setDessenha("senha");
$aluno->setDtcadastro("");

$aluno->insert();

echo $aluno->__toString();*/

// ALTERAR USUARIO


/*
$usuario = new Usuario();

$usuario->loadById(2);

$usuario->update("professor", "senha");
*/

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;



?>