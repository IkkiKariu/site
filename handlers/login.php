<?php
require_once("../app/applicationContext.php");

if ($_POST) 
{
    foreach ($users as $user)
    {
        if ($_POST["password"] == $user["password"] && $_POST["email"] == $user["login"]) {
            header("Location: ../index.php");
        }else {
           header("Location: error.php");
        }
    }
}
?>
