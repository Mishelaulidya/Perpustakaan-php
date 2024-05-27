<?php

    include_once("./connect.php");

    $id = $_GET["Id"];

    $query = mysqli_query($db, "DELETE FROM buku where Id=$id");

    header("Location : buku.php");