<?php
?><!DOCTYPE html>
<html>
<head>
    <title>Sneaker Store</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <style>

    </style>
</head>
<body>






<div  class="mt-2 row row-cols-1 row-cols-sm-4 row-cols-md-4 g-5 text-center justify-content-center">






</div>

<!-- Add Bootstrap JS at the end of the body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    fetch("products.json")
        .then(function(response) {
            return response.json();
        })
        .then(function(data){
            localStorage.setItem("products", JSON.stringify(data));
            if(!localStorage.getItem("cart")){
                localStorage.setItem("cart", "[]");
            }
            displaySneakers(data);
        });

    // SETTING GLOBAL VARIABLES SO WE CAN ACCESS THEM FROM INSIDE THE FUNCTIONS.
    let products = JSON.parse(localStorage.getItem("products"));
    let cart = JSON.parse(localStorage.getItem("cart"));

    function displaySneakers(data) {
        let cardContainer = document.getElementById("sneakerCardContainer");
        cardContainer.innerHTML = ""; // Clear the card container before populating with data

        data.forEach(function(sneaker) {

            let row = document.createElement("div");
            row.classList.add("row", "row-cols-2", "g-4");

            let cardCol = document.createElement("div");
            cardCol.classList.add("col");

            let card = document.createElement("div");
            card.classList.add("card");


            let image = document.createElement("img");
            image.classList.add("card-img-top"); // Add the class for the image position
            image.src = sneaker.image; // Set the source URL of the image
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

            let addButton = document.createElement("button");
            addButton.classList.add("btn", "btn-success");
            addButton.textContent = "Add to Cart";
            addButton.addEventListener("click", function() {
                addItemToCart(sneaker.id);
            });
            cardBody.appendChild(addButton);

            card.appendChild(cardBody);
            cardContainer.appendChild(card);
        });
    }

    function addItemToCart(productId) {
        let product = products.find(function(product) {
            return product.id == productId;
        });
        if (cart.length == 0) {
            cart.push(product);
        } else {
            let res = cart.find(element => element.id == productId);
            if (res === undefined) {
                cart.push(product);
            }
        }
        localStorage.setItem("cart", JSON.stringify(cart));
    }
</script>
<scirpt src="script.js"></scirpt>
</body>
</html>