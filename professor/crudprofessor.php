
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
    body{
    width: 100%;
    height: 100vh;
    display: grid;
    grid-template-rows: 80px 1fr 70px;
}
main{
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(../fundo-2.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    flex-direction: column;
    gap: 7px;
}
header{
  display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(../flamengo.png) ;
    background-size: 80px;
    background-repeat: no-repeat;
    background-color: rgb(99, 255, 177);
}
footer{
    background-color:  rgb(99, 255, 177);
    display: flex;
    align-items: center;
    justify-content: center;
}
*{
    margin: 0;
    padding: 0;
}
button{
    background-color: rgb(52, 247, 52);
    padding: 7px 20px;
    border-radius: 10px;
}
   
    </style>
</head>
<body>
         <header>
          <h2>CONCLUIDO</h2>
         </header>

         <main>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET["datanascimento"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];

    
        ##codigo SQL
        $sql = "INSERT INTO professor(nome,cpf,idade,datanascimento,endereco,estatus) 
                VALUES('$nome','$cpf','$idade','$datanascimento','$endereco','$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> PARABENS PROFESSOR
                $nome O SEU CADASTRO FOI CONCLUIDO COM SUCESSO!!!"; 
                echo " <button class='button'><a href='../index.php'>VOLTAR</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $id = $_POST["id"];

    
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, cpf= :cpf, endereco= :endereco, idade= :idade, datanascimento= :datanascimento, estatus= :estatus WHERE id= :id";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam('id',$id, PDO::PARAM_INT);
    $stmt->bindParam('nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam('cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam('idade',$idade, PDO::PARAM_STR);
    $stmt->bindParam('datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam('endereco',$endereco, PDO::PARAM_INT);
    $stmt->bindParam('estatus',$estatus, PDO::PARAM_STR_CHAR);
  
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O PROFESSOR
             $nome foi MODIFICADO COM SUCESO!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

};      

##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O PROFESSOR
             $id RETIRADO DA BASE DE DADOS COM SUCESSO!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>
        </main>

        <footer>
       <h4>@if baiano</h4>
     </footer>
</body>
</html>


