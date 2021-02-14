<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*// Carrega um usuário
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);

echo "<br><br>";
echo "<hr>";
*/

//Carrega uma lista de usuarios pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root", "!@#$123");

echo $usuario;
*/

//Insert
/*//Sem utilização de método construtor
$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
*/

//Utilizando método construtor
/*
$aluno = new Usuario("player1", "g4m3r");

$aluno->insert();

echo $aluno;
*/

/*
//Alteração de usuário
$usuario = new Usuario();

$usuario->loadById(11);

$usuario->update("professor", "tiburcio");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
?>