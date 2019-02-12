<?php

$host    = "localhost";
        $user    = "root";
        $pass    = "root";
        $db_name = "jpommi";

        // Mise en place de la connexion
        $connection = mysqli_connect($host, $user, $pass, $db_name);

        // En cas d'erreur de connexion
        if(mysqli_connect_errno()){
            die("Erreur de connexion : "
                . mysqli_connect_error()
                . " (" . mysqli_connect_errno()
                . ")");
        }

?>
