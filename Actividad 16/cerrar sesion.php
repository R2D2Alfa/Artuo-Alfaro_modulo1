<?php

//cerrar sesión
    session_start();
    session_unset();
    session_destroy();

    header("location: ./forms.php");
?>