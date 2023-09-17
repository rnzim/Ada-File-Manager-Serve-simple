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

       $name = $_POST['name'] ?? null;
       $content = $_POST['content'] ??null;
       $saveDir = $_POST['sd'] ?? null;
       $dirCurrent = $_GET['dir'] ?? null;
       
       
       
       if(!is_null($name)){
       
         $file = fopen("$saveDir/$name","w");
         if(fwrite($file,$content)) {
            fclose($file);
            echo "<script> history.go(-2)
           </script>";
         }
        
       }
    ?>
    <main>
    <form action="createFile.php" method="post">
        <fieldset>
        <legend>Name</legend>
        <input type="text" name="name">
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
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