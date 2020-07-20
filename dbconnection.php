<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'coronadb';

    $con = mysqli_connect($server, $user, $password, $db);

    /**************** 
    // checks whether the page is connected to database or not
    if($con) {
        ?>
        <script>
            alert("connection successful");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("connection failed");
        </script>
        <?php
    }  **************/

?>