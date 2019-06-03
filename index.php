<?php

// require_once "Pessoas.php";
// // já podemos usar a classe dentro do arquivo.

// $pessoa = new Pessoas();

// $pessoa->setNome("Camila");

// $pessoa->setIdade(28);

// var_dump($pessoa);



$controller = key($_GET);
$controller.="Controller";

require_once "controller/$controller.php";

$obj = new $controller();
$obj->view($_SERVER['REQUEST_METHOD']);

?>
