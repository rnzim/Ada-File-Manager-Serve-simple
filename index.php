<?php 
      
        $newDir = $_GET['dir'] ?? null;
      
        //custom dir here
        $customdir = "/user-files";
        
        
       
        
        ?>
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

    <main>
        <div class="options">
        <?php
         require_once "funcs.php";
         if(is_root()){
            $dirroot=getcwd().$customdir;
            echo "
            
            <div class='items'><img src='icons/lapis.png' ><a class='blue' href='createFile.php?dir=$dirroot'>New File</a></div>
            
            ";

         }else{
            echo "
            
            <div class='items'><img src='icons/lapis.png' ><a class='blue' href='createFile.php?dir=$newDir>'>New File</a></div>
            
            ";
         }
        ?>
       <!-- <div class="items"><img src="icons/lapis.png" alt=""><a class="blue" href="createFile.php?dir=// echo $newDir;?>">New File</a></div>
       -->
        <?php 
        if(!is_root()){
                echo "
            <div class='items'><img src='icons/upload-de-arquivo.png'><a class='blue' href='upload.php?dir=$newDir'>Upload </div>
            ";
        }
        else{
            echo "
            <div class='items'><img src='icons/upload-de-arquivo.png'><a class='blue'href='upload.php?dir=$dirroot'>Upload </div>
            ";
        }
        
        ?>
        <?php
         require_once "funcs.php";
         if(is_root()){
            $dirroot=getcwd().$customdir;
            echo "
            
            <div class='items'><img src='icons/pasta.png' ><a class='blue' href='newFolder.php?dir=$dirroot'>New Folder</a></div>
            
            ";

         }else{
            echo "
            
            <div class='items'><img src='icons/pasta.png' ><a class='blue' href='newFolder.php?dir=$newDir>'>Folder</a></div>
            
            ";
         }
        ?>
       
      <?php
        if(!is_root()){
           echo " <button class='back'><img src='icons/voltar.png'onclick='window.history.back()'></button>";
        }
        
      ?>
      <button class='back'><img src='icons/reload.png'onclick='location.reload()'>Reload</button>

    
    </div>
    
    <table>
        <legend></legend>
        <thead><th>Type</th><th> Name</th>  <th>Size</th></th> <th></th></thead>
        <tbody> 
        
        
     <?php 
     $newDir = $_GET['dir'] ?? null;
     $adaDir = "";
     
     
     $dirCurrent = getcwd().$customdir;
     //
    // $dirCurrent = getcwd();
     $sc = scandir($dirCurrent);
    
     if(!is_root()){

        $dvf = viewFile();
     }else{
        $dvf = "user-files";
     }
    

     if(!is_null($newDir)){
        $dirCurrent = $newDir;
        if(is_dir($newDir)){
        $sc = scandir($dirCurrent);
        }
       
     }
     
     foreach ($sc as $key => $files) {
        if($files == "."){
            $trash="";
            $trash = $files;
        }
        if($files == ".."){
            echo " <tr><td><img src='icons/pasta.png'>
                    <td><a href='.'>Raiz $files</a>
                    <td>Root
                    <td>Root</tr>";

            }
        else {
           
            if(str_contains($dirCurrent."/".$files,".txt")){
                      
                        echo " <tr><td><img src='icons/txt.png'>
                        <td><a href='$dvf/$files'>$files</a>
                        <td
                        <td> <td> <a href='delete.php?dir=$dirCurrent/$files'><img src='icons/excluir.png'></a></tr>
                       ";
            }


            if(str_contains($dirCurrent."/".$files,".mp4")){
                      
                echo " <tr><td><img src='icons/mp4.png'>
                <td><a href='$dvf/$files'>$files</a>
                <td
                <td> <td> <a href='delete.php?dir=$dirCurrent/$files'><img src='icons/excluir.png'>  <td><a href='$dvf/$files' type='application/mp4'><img src='icons/download-direto.png'</a></
                a></tr>
               
               ";
             }

            else{

                if(is_dir($dirCurrent."/".$files)){
                    echo " <tr><td><img src='icons/pasta.png'>
                    <td><a href='index.php?dir=$dirCurrent/$files'>$files</a>
                    <td>
                  
                    <td><a href='delete.php?dir=$dirCurrent/$files'><img src='icons/excluir.png'></a></tr>";

            
                
                }else{
                    $dvf = viewFile();
                    echo " <tr><td><img src='icons/desconhecido.png'>
                    <td><a href='$dvf/$files'>$files</a>
                    <td>
                    <td> <a href='delete.php?dir=$dirCurrent/$files'><img src='icons/excluir.png'></a></tr>"; 
                    }
                }
            }
        
    }
     
     
     
     ?>
     </tbody>
     </table>
    </main>

    <footer>

    </footer>
</body>
</html>