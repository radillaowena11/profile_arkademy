<?php
    session_start();

    if(($_POST["txt_user"]=="joko")
    &&
        ($_POST["txt_pass"]=="rahasia"))

    {
        echo "betul";
        $_SESSION["login"]="login";
        header("Location: halaman_admin.php")

    }else{
        echo "username atau password salah";

    }
?>