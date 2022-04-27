<?php
#$sql = new mysqli("localhost:3306", "root", "", "vacanze") or die($sql->error);


#if (isset($_POST["username"],$_POST["name"],$_POST["surname"],$_POST["email"],$_POST["psw"])) {

    #$username=$_POST["username"];
    #$psw=$_POST["psw"];
   #echo "<script>alert(\"ciao\");</script>";
    #$sql->query("insert into login('username', 'name', 'surname', 'email', 'psw') values ('{$_POST["username"]}','{$_POST["name"]}','{$_POST["surname"]}','{$_POST["email"]}','$psw')");
    #echo "<script>alert(\"ciaccio merda infame\");</script>";
#}

#else if (isset($_POST["username"],$_POST["psw"])){

    #$username=$_POST["username"];
    #$psw=$_POST["psw"];

#$risultato=$sql->query("select * from login where username=$username and psw=$psw");

#if ($risultato->affected_rows == 1) {
#$_SESSION["user"] = $risultato->fetch_assoc()["username"];
#}

#}



#$sql->close();

$sql = new mysqli("localhost:3306", "root", "", "vacanze") or die($sql->error_log);

if (isset($_POST["username"],$_POST["name"],$_POST["surname"],$_POST["email"],$_POST["psw"])) {
    $sql->query("insert into login(name, surname, username, email, psw) VALUES ('{$_POST["name"]}','{$_POST["surname"]}','{$_POST["username"]}','{$_POST["email"]}','{$_POST["psw"]}')");
    if ($sql->affected_rows == 1) {
        $_SESSION["username"] = $_POST["username"];
    } else {
        echo "<script>alert('Errore!');</script>";
    } 
}

header("Location:login.php");
$sql->close();
?>