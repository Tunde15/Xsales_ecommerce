<?php

function redirect($page){
    header("Location: {$page}");
}

function keep_succmsg($msg){
    !empty($msg) ? $_SESSION['succmsg'] = $msg : $msg = "";
}

function show_succmsg(){
    if(isset($_SESSION['succmsg'])){
        echo $_SESSION['succmsg'];
        unset($_SESSION['succmsg']);
    }
}

function keep_failmsg($msg){
    !empty($msg) ? $_SESSION['failmsg'] = $msg : $msg = "";
}

function show_failmsg(){
    if(isset($_SESSION['failmsg'])){
        echo $_SESSION['failmsg'];
        unset($_SESSION['failmsg']);
    }
}

?>