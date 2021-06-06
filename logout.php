<?php 
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['pass']);
    unset($_SESSION['nama']);
    unset($_SESSION['level']);

    session_destroy();
    echo "<script>alert('Anda telah logout'); document.location='login.php'</script>";
?>