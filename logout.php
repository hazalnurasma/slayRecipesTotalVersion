<?php
session_start();

// Oturumu sonlandır
session_destroy();

// Yönlendirme yapabilirsiniz
header("Location: loginRegister.php");
exit();
