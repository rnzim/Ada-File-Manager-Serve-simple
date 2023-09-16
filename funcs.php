<?php

function is_root(){
    $dir = $_GET['dir'] ?? null;
    if(is_null($dir)){
        return true;
    }
    else{
        return false;
    }
}
function viewFile(){
    $dr = "";
}

?>