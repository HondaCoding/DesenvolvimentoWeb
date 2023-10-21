<?php
//empty = vazia 
//isset = se existe variavel

if(
    isset($_POST ["login"]) &&
    isset($_POST ["password"]) &&
    !empty($_POST ["login"]) &&
    !empty($_POST ["password"])
    
){
    $login = $_POST["login"];
$password = $_POST["password"];

    echo "Login = $login";
    echo "<br>Password = $password";
    
}else{
    echo "Campos não preenchidos!";

}


