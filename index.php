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


/*

$usuario = new Usuario();
$usuario->login("root","654321");
echo $usuario;

*/


/*

$aluno = new Usuario("Aluno01", "@159%753");
$aluno->insert();
echo $aluno;

*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Professor", "kdje´~e585");
echo "alteração realizada com sucesso";

 ?>