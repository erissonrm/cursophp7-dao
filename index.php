<?php
require_once("config.php");

/*carrega um usuario
$root = new Usuario();
$root->loadById(4);
echo $root;*/

//LISTA TODOS OS USUARIOS
/*
$lista = usuario::getList();
echo json_encode($lista);*/

//CARREGA LISTA DE USUARIOS POR LOGIN
/*$search = Usuario::search("pe");
echo json_encode($search);*/

//carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("Pedro","qwe123");
echo $usuario;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
?>