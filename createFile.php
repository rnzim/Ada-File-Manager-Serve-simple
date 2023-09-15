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
       $name = $_GET['name'] ?? null;
       $content = $_GET['content'] ??null;
       $dirCurrent= $_GET['dir'] ?? null;
       if(!is_null($name)){
          $file = fopen($name,"w");
         if(fwrite($file,$content)) {
            echo "sucesso salvo em $dir";
            fclose("$dir/$file");
         }else{
            echo "erro";
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
       <button><a href="index.php" class="white">Fechar </a> </button>
       
        <button type="submit">Salvar</button>
        </fieldset>
       
      
    </form>
    </main>

<footer>

</footer>
</body>
</html>