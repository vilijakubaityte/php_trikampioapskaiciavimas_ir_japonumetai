<?php

    $year = 0;
    $yearColor = 0;

    if (isset($_POST["year"])) {
    $year = $_POST["year"];
        $yearColor = $year - 3;
    };

    $yearColor = $yearColor % 10;

switch ($yearColor) {
    case 1:
    case 2:
        $yearColor = "žalieji metai";
        break;
    case 3:
    case 4:
        $yearColor = "raudonieji metai";
        break;
    case 5:
    case 6:
        $yearColor = "geltonieji metai";
        break;
    case 7:
    case 8:
        $yearColor = "baltieji metai";
        break;
    case 9:
    case 0:
        $yearColor = "juodieji metai";
        break;
};

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./metai.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigacija</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../trikampis/pagrindinis.php">Trikampis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pagrindinis2.php">Metai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <h1>Metų spalva pagal japonų kalendorių</h1>

<div class="header">
    <div class="card my-5 col-md-6 d-flex align-items-center">
        <div class="card-header col-md-12 d-flex row gap-3 align-items-center">
            <form action="rezultatas2.php" method="post" class="form">
                <input class="form-control mt-4" type="text" name="year" placeholder="Įveskite metus">
                <div>
                    <button type="submit" class="btn btn-secondary mb-3">Skaičiuoti</button>
                </div>
            </form>
            <div class="card-body">
                <h2>Rezultatas: <span> <?=$yearColor?> </span></h2>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
