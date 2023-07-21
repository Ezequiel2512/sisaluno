<?php


define('server','127.0.0.1');
define('banco','sisaluno');
define('senha', '');
define('user','root');

 

try{
    $conexao = new pdo('mysql:host=' . server . ';dbname=' 
                        . banco, user, senha);
     echo "conexao ok";                                                           
}catch(PDOException $e){
    echo "Erro gerado " . $e->getMessage();
}
?>
