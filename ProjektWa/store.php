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
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">


</script>



        </head>
<body>

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
                        <a class="nav-link" aria-current="page" href="#">Hlavní stránka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="store.php">Store</a>
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

<main>






    <br>
    <br>

    <div class="container-md mt-4 card text-light bg-secondary">
        <h1 class="mt-5 mx-5">Around the globe</h1>
        <p class="mt-2 mx-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
    </div>


    <div class="mt-4 row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 text-center justify-content-center  ">
        <div class="col">
            <div class="card">
                <img src="img/img1.png" class="img-fluid"
                     alt="uno" height="300px" />
                <div class="card-body bg-dark">
                    <form id="BuyForm" >
                    <h5 class="card-title text-light" for="name" type="text" name="name"  id="name" value="Jordan 4">Jordan 4</h5>
                    <h5 class="card-title text-light" name="price" value="90" id="price">90</h5>
                    <p class="card-text text-light">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    </p>
                    <input type="submit" value="send">
                </div>
            </div>
        </div>
    </form>



        <div class="col">
            <div class="card">
                <img src="img/img2.png" class="img-fluid"
                     alt="duo" height="300px" />
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light" id="name">Air Jordan 1 Retro High</h5>
                    <h5 class="card-title text-light" id="price">90</h5>
                    <p class="card-text text-light">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    </p>
                    <a href="#" class="btn btn-light"  id="submit">Klikni sem</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="img/img03.png" class="img-fluid"
                     alt="trees " height="300px" />

                <div class="card-body bg-dark">
                    <h5 class="card-title text-light" id="name">Air Jordan 1 Retro Low</h5>
                    <h5 class="card-title text-light" id="price">90</h5>
                    <p class="card-text text-light">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    </p>
                    <a href="#" class="btn btn-light " type="submit">Klikni sem</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="img/img04.png" class="img-fluid" alt="quatro" height="300px"    />
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light">Air Jordan 1 Retro Low</h5>
                    <h5 class="card-title text-light" id="price">90</h5>
                    <p class="card-text text-light">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis hendrerit ante. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    </p>
                    <a href="#" class="btn btn-light" id="submit">Klikni sem</a>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-info text-center text-lg-start fixed-bottom">
    <div class="text-center p-3" style="background-color: rgb(80,80,80);">
        <a class="text-light" href="https://github.com/MartinKunes">    ©Martin Kuneš 2023</a>
    </div>
</footer>


<br>
<br>
<br>


<script src="script1.js"></script>
</body>
</html>