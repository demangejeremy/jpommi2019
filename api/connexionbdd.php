<?php

$host    = "localhost";
        $user    = "root";
        $pass    = "root";
        $db_name = "jpommi";

        //create connection
        $connection = mysqli_connect($host, $user, $pass, $db_name);

        //test if connection failed
        if(mysqli_connect_errno()){
            die("connection failed: "
                . mysqli_connect_error()
                . " (" . mysqli_connect_errno()
                . ")");
        }

?>