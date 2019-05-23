<a href="home.php">home</a>

<?php
    session_start();
    //jika sudah login maka login hilang
    if ($_SESSION["login"]=="login")
    {
        //tulisannya logout
        echo "
        <a href='logout.php'>logout</a>|
        <a href='halaman_admin.php'>admin</a>
        ";

    }else {
        echo "
        <a href='login.php'>login</a>|
        ";
    }
    ?>

<a href="halaman_admin.php">admin</a>