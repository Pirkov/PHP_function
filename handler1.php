<?php
if(isset($_GET["submit"]))
{
    echo 'You are welcome: '.$_GET["username"]. '!</br>' .'Your password is: ' .$_GET["userpass"]. '</br>';
    var_dump($_REQUEST);
    print_r($_REQUEST);
}
else
{
    echo 'No data were received! GET</br>';
}

if(isset($_POST["submit"]))
{
    echo 'You are welcome: '.$_POST["username"]. '!</br>' .'Your password is: ' .$_POST["userpass"]. '</br>';
    var_dump($_REQUEST);
    print_r($_REQUEST);
}
else
{
    echo '</br> No data were received! POST';
}

?>