<?php

//$nameFile = $_GET['nm'] ?? null;
$dir = $_GET['dir'] ?? null;

if(!is_null($dir)){

  if(!is_dir($dir)){
    if(unlink($dir)){
      echo "<script> history.go(-1)
      </script>";

    }else{
        echo "erro ao deletar";
        var_dump(unlink("$dir/$nameFile"));
    }
  }else{
    rmdir($dir);
    echo "<script> history.go(-1)
    </script>";
  }
}

?>