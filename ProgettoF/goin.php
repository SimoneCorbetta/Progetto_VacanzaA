<?php
session_start();

$sql = new mysqli("localhost", "root", "", "vacanze") or die($sql->error_log);

if (isset($_POST["username"],$_POST["psw"])) {
    $res = $sql->query("select * from login where username='{$_POST["username"]}' and psw='{$_POST["psw"]}'");
    if ($res->num_rows >= 1) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["id"] = $res->fetch_assoc()["id"];
        header("Location:vacanze.php");
    } else {
        echo "<script>alert('Errore! Peccato!');</script>";
        header("Location:login.php");
    }
}



$sql->close();
?>