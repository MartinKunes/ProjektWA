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
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark static-top">
        <div class="container">
            <img src="img/logo4.png" alt="" width="180" height="40" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Hlavní stránka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="releases.php">Releases</a>
                    </li>
                    <?php if(!isset($_SESSION["email"])){
                        echo '"<li class="nav-item">
                      <a class="nav-link" href="loginDesign.php">Přihlásit</a>
                        </li><li class="nav-item">
                      <a class="nav-link active" >Not logged in</a>
                       </li>"';
                    }else {
                        echo '"<li class="nav-item">
                      <a class="nav-link" href="logout.php">Odhlásit</a>
                       </li>
                       <li class="nav-item">
                      <a class="nav-link active" > '.$_SESSION['email'].'</a>
                       </li>"';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>


<br>
<br>
<br>
<br>

<div class="container">
    <h1>In your cart</h1>
    <div class="mt-4 row row-cols-2 row-cols-sm-2 row-cols-md-4 g-4 text-center justify-content-center "  id="cardContainer">

    </div>

    <script>
        // Retrieve data from localStorage
        const cartData = localStorage.getItem('cart');
        const data = cartData ? JSON.parse(cartData) : [];



        // Iterate over the data and create rows and columns for each item
        data.forEach(sneaker => {
            let row = document.createElement("div");
            row.classList.add("row");

            let cardCol = document.createElement("div");
            cardCol.classList.add("col");

            let card = document.createElement("div");
            card.classList.add("card");


            let image = document.createElement("img");
            image.classList.add("card-img-top");    // Add the class for the image position
            image.src = sneaker.image;    // Set the source URL of the image
            card.appendChild(image);

            let cardBody = document.createElement("div");
            cardBody.classList.add("card-body");


            let name = document.createElement("h5");
            name.classList.add("card-title");
            name.textContent = sneaker.name;
            cardBody.appendChild(name);

            let releaseDate = document.createElement("p");
            releaseDate.classList.add("card-text");
            releaseDate.textContent = "Release Date: " + sneaker.releaseDate;
            cardBody.appendChild(releaseDate);

            let price = document.createElement("p");
            price.classList.add("card-text");
            price.textContent = "Price: $" + sneaker.price;
            cardBody.appendChild(price);


            card.appendChild(cardBody);
            cardContainer.appendChild(card);
        });

        // Append the table to the document body or any other container element


    </script>


</body>
</html>