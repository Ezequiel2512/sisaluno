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
  
   <header>
    <h1>CADASTRO DE ALUNO</h1>
   </header>
   <main>
   <form method="GET" action="crudaluno.php">
    <label for="">NOME</label>
     <input type="text" name="nome" id="nome" required maxlength ="100">
     <label for="">ENDERECO</label>
     <input type="text" name="endereco"> 
     <label for="">IDADE</label>
     <input type="text" name="idade">
     <label for="">DATANASCIMENTO</label>
     <input type="date" name="datanascimento">
     <label for="">ESTATUS</label>
     <input type="bool" name="estatus">
     
     

     <input type="submit" name="cadastrar" value="CONFIRMAR">
     <a href="../index.php">VOLTAR</a>
    </form>

    
   </main>
  
     <footer>
      <h4>@if baiano</h4>
  </footer>

</body>
</html>