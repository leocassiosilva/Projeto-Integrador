<?php 
session_status();
if(!$_SESSION['nome']){
    header('index.php');
    exit();
}