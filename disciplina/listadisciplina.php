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
    main{
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(../fundo-3.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    flex-direction: column;
    gap: 7px;
    color: rgb(0, 0, 0);
}

table{
    border: 3px solid black;
    padding: 8px;

}
td,th{
    border: 1px solid rgb(0, 0, 0);
    padding: 3px;
}
section{
    background-color: rgb(214, 189, 156);
}
button{
    background-color: rgba(52, 247, 52, 0.664);
    padding: 7px 20px;
}
header{
    background-color: rgb(99, 255, 177);
    display: flex;
    align-items: center;
    justify-content: center;
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
        <h1>TABELAS</h1>
    </header>
    <main>
    <?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>       <section>
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME-DISCIPLINA</th>
                    <th>CARGA-HORARIA</th>
                    <th>SEMESTRE</th>
                   
                    
                    
                   
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                           <td> <?php echo $value['id']?>  </td> 
                           <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?>  </td> 
                            <td> <?php echo $value['semestre']?> </td> 
                          
                            
                            

                            <td>
                               <form method="POST" action="altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php         
   echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";
?>
</section>
    </main>
   
  <footer>
      <h4>@if baiano</h4>
  </footer>

</body>
</html>

