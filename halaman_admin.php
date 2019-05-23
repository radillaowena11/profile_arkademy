ini halaman admin<br>
<?php include "header.php"?>
<?php
    if ($_SESSION["LOGIN"]=="")
    {
        header("Location:login.php");
    }
?>