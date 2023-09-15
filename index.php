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
         
        <div class="items"><img src="icons/lapis.png" alt=""><a class="blue" href="createFile.php">New File</a></div>

        <div class="items"><img src="icons/upload-de-arquivo.png" alt="">Upload</div>

        <div class="items"><img src="icons/upload-de-arquivo.png" alt="">New Folder</div>


    
    </div>
    <table>
        <thead><th>Type</th><th> Name</th>  <th>Size</th></th> <th>Time</th></thead>
        <tbody> 
        
        
     <?php 
     $newDir = $_GET['dir'] ?? null;

     $dirCurrent = getcwd();
     $sc = scandir($dirCurrent);


     if(!is_null($newDir)){
        $dirCurrent = $newDir;
        if(is_dir($newDir)){
        $sc = scandir($dirCurrent);
        }
        else{
           
            
        }
    }
     
     foreach ($sc as $key => $files) {
        if($files == "."){
            $trash="";
            $trash = $files;
        }
        else {
            if($files == "..")
            echo " <tr><td><img src='icons/pasta.png'>
                    <td><a href='.'>$files</a>
                    <td>Root
                    <td>Root</tr>";
            else{

                if(is_dir($files)){
                    echo " <tr><td><img src='icons/pasta.png'>
                    <td><a href='index.php?dir=$dirCurrent/$files'>$files</a>
                    <td
                    <td></tr>";

                if(str_contains($files,".txt")){
                    echo " <tr><td><img src='icons/txt.png'>
                    <td><a href='index.php?dir=$dirCurrent/$files'>$files</a>
                    <td
                    <td></tr>";
                }
                }else{
                    echo " <tr><td><img src='icons/desconhecido.png'>
                    <td><a href='index.php?dir=$dirCurrent/$files'>$files</a>
                    <td
                    <td></tr>"; 
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