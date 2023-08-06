<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    body{
        width: 100%;
        height: 100vh;
        display: grid;
        grid-template-rows: 80px 1fr 70px;
    }
    form{
        width: 360px;
        background-color: rgb(107, 236, 172, 0.75);
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        line-height: 14px;
    }
    input{
        
    width: 45vh;
    height: 25px;
    border-radius: 30px;
    border: 3;
    }
    a{
        background-color: rgb(218, 218, 218);
        padding: 7px;
        width: 95%;
        height: 15px;
        display: flex;
        justify-content: center;
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

   </style>
</head>
<body>
<header> <h1> ALTERAR DADOS DA DISCIPLINA</h1> </header>
<main>
<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];

   



?>

  <form method="POST" action="cruddisciplina.php">
        <label for="">NOME-DISCIPLINA</label>
        <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> >
        <label for="">CARGA-HORARIA</label>
        <input type="text" name="ch" id="" value=<?php echo $ch?> >     
        <label for="">SEMESTRE</label>
        <input type="text" name="semestre" id="" value=<?php echo $semestre?> >
      

       
     <br>
       

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
  </main> 
  <footer>
      <h4>@if baiano</h4>
  </footer>
</body>
</html>