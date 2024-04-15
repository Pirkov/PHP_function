<?php

//Bootstrap
if(isset($_GET["submit"]))
{
    echo 'Bootstrap метод-GET'.'</br>' .'Ваш email: '.$_GET["email"]. '!</br>' .'Ваш password: ' .$_GET["password"]. '</br>';
    //var_dump($_REQUEST);
    //print_r($_REQUEST);
}
else
{
    echo 'No data were received! GET</br>';
}

if(isset($_POST["submit"]))
{
    echo 'Bootstrap метод-POST'.'</br>' .'Ваш email: '.$_POST["email"]. '!</br>' .'Ваш password: ' .$_POST["password"]. '</br>';
    //var_dump($_REQUEST);
    //print_r($_REQUEST);
}
else
{
    echo 'No data were received! POST</br>';
}

?>