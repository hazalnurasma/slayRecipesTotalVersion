<?php
// kayit
// baglanti.php dosyasını dahil edin

require_once "connection.php";

if (isset($_POST["btn_kayit"])) {
    // Formdan gönderilen verileri al
    $userName = $_POST["userName"];
    $userMail = $_POST["userMail"];
    $pwd = $_POST["userPwd"];

    // Verileri veritabanına kaydet
    $sql = "INSERT INTO user (userID, userName, userMail, userPwd)
            VALUES (null, '$userName', '$userMail', '$pwd')";

    if ($conn->query($sql) === TRUE) {
        header("Location: loginRegister.php?kayit=ok");
    } else {
        echo "Kayıt ekleme hatası: " . $conn->error;
    }
}

// giris
// POST verilerini al
if (isset($_POST["btn_giris"])) {
    $userName = $_POST["userName"];
    $pwd = $_POST["userPwd"]; // Parolayı "pwd" olarak alıyoruz

    // Kullanıcı adı ve parola doğrulama
    $sql = "SELECT * FROM user  WHERE userName = '$userName' AND userPwd = '$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kullanıcı doğru giriş yaptığında dashboard.php sayfasına yönlendir
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['userID'];
        $_SESSION['kullaniciGiris'] = true;
        $_SESSION['userName'] = $userName; // Kullanıcı adını oturumda saklayın
        header("Location: recipeCards.html?session=" . $_SESSION['id']);
        exit();
    } else {
        echo '<script>alert("User name or password is wrong!");</script>';
    }
}
