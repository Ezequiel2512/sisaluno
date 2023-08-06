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
    width: 370px;
    background-color: rgb(107, 236, 172, 0.75);
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
   flex-direction: column;
    border-radius: 30px;
    line-height: 16px;
}
input{
    width: 45vh;
    height: 25px;
    border-radius: 30px;
    border: 3;
}
input:not(:last-child){
   
}
a{
   background-color: white;
    padding: 7px;
    width: 84%;
    height: 14px;
    display: flex;
    justify-content: center;
    border-radius: 30px;
    border: 3;
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
  
   <header>
    <h1>CADASTRO DE DISCIPLINA</h1>
   </header>
   <main>
   <form method="GET" action="cruddisciplina.php">
    <label for="">NOME-DISCIPLINA</label>
     <input type="text" name="nomedisciplina" id="nomedisciplina" required maxlength ="100">
     <label for="">CARGA-HORARIA</label>
     <input type="text" name="ch"> 
     <label for="">SEMESTRE</label>
     <input type="text" name="semestre"><br>
   

     <input type="submit" name="cadastrar" value="CONFIRMAR">
     <a href="../index.php">VOLTAR</a>
    </form>

    
   </main>
  
     <footer>
      <h4>@if baiano</h4>
  </footer>

</body>
</html>