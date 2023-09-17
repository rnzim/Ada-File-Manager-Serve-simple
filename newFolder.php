<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ada</title>
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <header> <h1>Ada <span>Files</span></h1> </header>
    <?php
        $saveDir = $_POST['sd'] ?? null;
        $dirCurrent = $_GET['dir'] ?? null;
        $name = $_POST['name'] ?? null;

     
        if(!is_null($name)){
        if(mkdir("$saveDir/$name",0777,true)){
          echo "<script> history.go(-2)
          </script>";
        
        }else{
            echo "Erro sinistro ao criar";
        }
    }
    ?>
    <main>
    <form action="newFolder.php" method="post">
        <fieldset>
        <legend>Name</legend>
        <input type="text" name="name">
        <br>
       
        <input type="hidden" name="sd"value="<?php echo $dirCurrent?>">
       <a href="index.php" class="white">Fechar </a> 
       
        <button type="submit">Salvar</button>
        </fieldset>
       
      
    </form>
    </main>

<footer>

</footer>
</body>
</html>