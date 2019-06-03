<?php 

$host = "mysql:host=localhost;dbname=desafiophp;charset=utf8mb4;port=3306";
$db_User = "root";
$dbPass = "";


try {
    $con = new PDO($host,$db_User,$dbPass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch( PDOException $e ) {
    echo "Estamos em manutenção, volte novamente mais tarde";

    echo $e->getMessage();
}



