<?php 

require_once("config.php");


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

*/


/*

$root = new Usuario();
$root->loadById(4);
echo $root;

*/


/*

$lista = Usuario::getList();
echo json_encode($lista);

*/


/*

$search = Usuario::search("jo");
echo json_encode($search);

*/

$usuario = new Usuario();

$usuario->login("Teste","159753");

echo $usuario;

 ?>