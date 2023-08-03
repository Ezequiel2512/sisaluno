<?php


define('server','10.70.230.53:3306');
define('banco','sisaluno');
define('senha', 'sisaluno2023');
define('user','sisaluno');

 

try{
    $conexao = new pdo('mysql:host=' . server . ';dbname=' 
                        . banco, user, senha);
     echo "conexao ok";                                                           
}catch(PDOException $e){
    echo "Erro gerado " . $e->getMessage();
}
?>