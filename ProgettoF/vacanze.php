<?php
session_start();

if (!isset($_SESSION["username"], $_SESSION["id"])) {
    echo "<script>alert('no');</script>";
    header("Location:login.php");
}

echo "input({$_SESSION["username"]}, {$_SESSION["id"]})";

$sql = new mysqli("localhost:3306", "root", "", "vacanze") or die($sql->error_log);

                if (isset($_POST["data"], $_POST["ammontare"], $_POST["tipo"])) {
                    echo "'{$_SESSION["username"]}','{$_POST["ammontare"]}','{$_POST["tipo"]}','{$_POST["data"]}',{$_SESSION["id"]}";
                    #$sql->query("insert into cdg('epoca','nominativo','ammontare','codcdg','tipo') values ('{$_POST["data"]}','{$_SESSION["username"]}','{$_POST["ammontare"]}','{$_SESSION["id"]}','{$_POST["tipo"]}");
                    $sql->query("INSERT INTO `cdg`(`nominativo`, `ammontare`, `tipo`, `epoca`, `codcdg`) VALUES ('{$_SESSION["username"]}','{$_POST["ammontare"]}','{$_POST["tipo"]}','{$_POST["data"]}','{$_SESSION["id"]})");
                    if ($sql->affected_rows != 1) {
                        echo "<script>alert('ao');</script>";
                    } 
                } 
                else echo "<script>alert('ciao');</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <span class="input-group-text"><input type="number" class="form-control" placeholder="Ammontare" name="ammontare"></span>

            <!--<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="Tipo">Tipo</button>-->
            <select name="tipo">
                <option value="Benzina">Benzina</option>
                <option value="Alimenti">Alimenti</option>
                <option value="Alloggio">Alloggio</option>
                <option value="Bonifico">Bonifico</option>
            </select>


            <input type="date" aria-label="Last name" class="form-control" name="data">

            <input type="submit" class="btn btn-primary" value="Conferma"></input>

        </div>
    </form>

    <footer>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Nominativo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ammontare</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                
            </tbody>
        </table>
    </footer>

    <script src="./assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>