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
                        <a class="nav-link active" aria-current="page" href="#">Hlavní stránka</a>
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
<br>
<br>
<br>
<br>

<div class="container d-flex align-items-center justify-content-center"">

    <h1>In your cart</h1>

<script>
  // Retrieve data from localStorage
  const cartData = localStorage.getItem('cart');
  const data = cartData ? JSON.parse(cartData) : [];

  // Create a table element
  const table = document.createElement('table');

  // Create table header row
  const headerRow = document.createElement('tr');
  const nameHeader = document.createElement('th');
  const imageHeader = document.createElement('th');
  const releaseDateHeader = document.createElement('th');
  const priceHeader = document.createElement('th');
  imageHeader.textContent = 'Image';
  nameHeader.textContent = 'Name';
  releaseDateHeader.textContent = 'Release Date';
  priceHeader.textContent = 'Price';
  headerRow.appendChild(imageHeader);
  headerRow.appendChild(nameHeader);
  headerRow.appendChild(releaseDateHeader);
  headerRow.appendChild(priceHeader);
  table.appendChild(headerRow);

  // Iterate over the data and create rows and columns for each item
  data.forEach(item => {
    // Create a table row element

    const row = document.createElement('tr');

    // Create table data cells for each item detail
      const image = document.createElement('img');
      image.src = item.image;

      const nameCell = document.createElement('td');
    const releaseDateCell = document.createElement('td');
    const priceCell = document.createElement('td');

    // Set the text content of each cell
    image.iContent = item.image;
    nameCell.textContent = item.name;
    releaseDateCell.textContent = item.releaseDate;
    priceCell.textContent = item.price;

    // Append the cells to the row
    row.appendChild(image);
    row.appendChild(nameCell);
    row.appendChild(releaseDateCell);
    row.appendChild(priceCell);

    // Append the row to the table
    table.appendChild(row);
  });

  // Append the table to the document body or any other container element
  document.body.appendChild(table);

</script>

</div>
</body>
</html>