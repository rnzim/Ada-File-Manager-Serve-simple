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
    $drr = $_GET['dir'] ?? null;
        if(!is_null($drr)){

        $drrfinal  = substr($drr,strpos($drr,"user-files"),strlen($drr));
        return $drrfinal;
    }
}

?>