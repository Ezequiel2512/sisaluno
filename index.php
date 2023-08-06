<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    width: 100%;
    height: 100vh;
    display: grid;
    grid-template-rows: 80px 1fr 70px;
}
header{
    background-color: rgb(99, 255, 177);
    display: flex;
    align-items: center;
    justify-content: center;
}
main{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-image: url(fundo.png);
    background-size: 650px;
    background-repeat: no-repeat;
    background-position: center;
    gap: 7px;
 
}
main > button{
    background-color: rgb(52, 247, 52);
    padding: 7px 20px;
    border-radius: 10px;
    border: 3px solid black;
}
footer{
    background-color:  rgb(99, 255, 177);
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>
  
</head>
<body>

    <header>
        <h1>INSCREVA-SE</h1>
    </header>
    <main>
        <button class="button"><a href="aluno/cadaluno.php">CADASTRA-ALUNO</a></button>
        <button class="button"><a href="aluno/listaalunos.php">LISTAR-ALUNO</a></button>

        <button class="button"><a href="professor/cadprofessor.php">CADASTRA-PROFESSOR</a></button>
        <button class="button"><a href="professor/listaprofessor.php">LISTAR-PROFESSOR</a></button>

        <button class="button"><a href="disciplina/caddisciplina.php">CADASTRA-DISCIPLINA</a></button>
        <button class="button"><a href="disciplina/listadisciplina.php">LISTAR-DISCIPLINA</a></button>

    </main>

  <footer>
      <h4>@if baiano</h4>
  </footer>

</body>
</html>