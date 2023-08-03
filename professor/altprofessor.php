<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cadastra.css">
    <link rel="stylesheet" href="../form.css">
</head>
<body>
<header> <h1> ALTERAR DADOS DO PROFESSOR</h1> </header>
<main>
<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $cpf = $array_retorno['cpf'];
   $endereco = $array_retorno['endereco'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];



?>

  <form method="POST" action="crudprofessor.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >

        <input type="text" name="cpf" id="" value=<?php echo $cpf?> >     

        <input type="text" name="endereco" id="" value=<?php echo $endereco?> >

        <input type="text" name="idade" id="" value=<?php echo $idade?> >

        <input type="text" name="datanascimento" id="" value=<?php echo $datanascimento?> >

        <input type="text" name="estatus" id="" value=<?php echo $estatus?> >

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
  </main> 
  <footer>
      <h4>@if baiano</h4>
  </footer>
</body>
</html>