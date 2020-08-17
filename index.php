<?php

require_once("config.php");

//carrega um usuario

/*$root = new Usuario();
$root->loadbyId(7);
echo $root;*/

//carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);


//carrega uma lista de usuarios pelo login

//$search = Usuario::search("us");

//echo json_encode($search);

//carrega usuario o login e senha


//$usuario = new Usuario();
//$usuario->login("randal","555");

//echo $usuario;

//criando insert - novo usuario

//$aluno = new Usuario("aluno", "@aluno");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("professor", "444");

echo $usuario;

?>