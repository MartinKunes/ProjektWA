<?php
session_start();


if(isset($_SESSION["email"])){
    echo "Logged as " . $_SESSION['email'];
} else {
    header("Location: 404.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">


    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body >

<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>MK Sneakers</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Hlavní stránka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="releases.php">Releases</a>
                    </li>
                    <?php if(!isset($_SESSION["email"])){
                        echo '"<li class="nav-item">
                      <a class="nav-link" href="loginDesign.php">Přihlásit</a>
                        </li>"';
                    }else {
                        echo '"<li class="nav-item">
                      <a class="nav-link" href="logout.php">Odhlásit</a>
                       </li>"';

                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="bg-secondary">
<br>
<br>
<br>
<br>




    <div class="mt-2  row row-cols-2 row-cols-sm-2 row-cols-md-2 g-4 text-center justify-content-center  ">
        <div class="container">
        <div id="sneakers"></div>


    </div>
    </div>



<br>
<br>
<br>
<br>
</main>
<footer class="bg-info text-center text-lg-start fixed-bottom">
    <div class="text-center p-3" style="background-color: rgb(80,80,80);">
        <a class="text-light" href="https://github.com/MartinKunes">    ©Martin Kuneš 2023</a>
    </div>
</footer>

<script src="script.js"></script>

</body>
</html>