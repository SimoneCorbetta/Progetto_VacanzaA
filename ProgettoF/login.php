<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>

<body>
    <h3>Accedi</h3>
    <form method="POST" id="login" action="goin.php">
        <label for="username">Nome utente:</label>
        <input required name="username" type="text" value="" /><br />

        <label for="psw">Password:</label>
        <input required name="psw" type="password" value="" /><br />
        <br>

        <input required name="loginSubmit" type="submit" value="entra" />
    </form>

<br>
<br>
<br>

    <h3>Registrati</h3>
    <form method="POST" action="singup.php" id="signup">
        <label for="name">Nome:</label>
        <input required name="name" type="text" value="" /><br />

        <label for="surname">Cognome:</label>
        <input name="surname" type="text" value="" required /><br />

        <label for="username">Nome utente:</label>
        <input name="username" type="text" value="" required /><br />

        <label for="email">Email:</label>
        <input  name="email" type="email" value="" required /><br />

        <label for="psw">Password:</label>
        <input name="psw" type="password" value="" required /><br />
        <br>

        <input name="signupSubmit" type="submit" value="invia" required />
    </form>



</body>
</html>
