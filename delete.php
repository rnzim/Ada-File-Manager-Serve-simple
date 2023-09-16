<?php

//$nameFile = $_GET['nm'] ?? null;
$dir = $_GET['dir'] ?? null;

if( !is_null($dir)){
    if(unlink($dir)){
        header("Location: index.php");
        exit;

    }else{
        echo "erro ao deletar";
        var_dump(unlink("$dir/$nameFile"));
    }

}

?>