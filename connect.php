<?php
    $link = mysqli_connect("localhost","root","","BD_projets_webiz") or
    die("Error".mysqli_connect_error());
    mysqli_query($link,"set names 'UTF8'");
?>
