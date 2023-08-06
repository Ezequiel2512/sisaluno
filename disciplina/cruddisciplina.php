<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
       
    
        ##codigo SQL
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre) 
                VALUES('$nomedisciplina','$ch','$semestre')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);
        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> PARABENS A DISCIPLINA
                $nomedisciplina  FOI CADASTRADA COM SUCESSO!!!"; 
                echo " <button class='button'><a href='../index.php'>VOLTAR</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id = $_POST["id"];
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $semestre= $_POST["semestre"];
  

    
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre WHERE id= :id";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam('id',$id, PDO::PARAM_INT);
    $stmt->bindParam('nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam('ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam('semestre',$semestre, PDO::PARAM_STR);
    
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A DISCIPLINA
             $nomedisciplina foi MODIFICADA COM SUCESO!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

};      

##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> DISCIPLINA
             $id FOI RETIRADA DA BASE DE DADOS COM SUCESSO!!!"; 

            echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
        }

}

        
?>
</main>
      <footer>
       <h4>@if baiano</h4>
     </footer>
</body>
</html>