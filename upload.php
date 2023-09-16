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
     $dirCurrent = $_GET['dir']??null;
     $file = $_FILES['name'] ?? null;
     $sd = $_POST['sd'] ?? null;
     if(!is_null($file) && !is_null($sd)){
      // var_dump($file);
       $dirfile = $sd;
       ; 
       
       $uploadfile = $dirfile."/" .   basename($_FILES['name']['name']);
    
       if(move_uploaded_file($_FILES['name']['tmp_name'], $uploadfile)){
          echo "Sucesso no upload";
          header("Location: index.php");
          exit;
       }else{
        echo"<pre>";
        echo"Final: $uploadfile<br>";
        var_dump(move_uploaded_file($_FILES['name']['tmp_name'],$uploadfile));
       }
     }
?>
<main>
<form enctype="multipart/form-data" action="upload.php" method="post" >
    <fieldset>
    <legend>Name</legend>
    <input type="file" name="name">
    
    <br>
   
    <input type="hidden" name="sd" value="<?php echo $dirCurrent?>" >
   <button><a href="index.php" class="white">Fechar </a> </button>
   
    <button type="submit">Upload</button>
    </fieldset>
   
  
</form>
</main>

<footer>