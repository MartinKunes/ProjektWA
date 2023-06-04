$(document).ready(function() {
    $.ajax({
        url: 'https://raw.githubusercontent.com/MartinKunes/API-boty/main/sneakers.json',
        dataType: 'json',
        success: function(data) {
            const sneakersContainer = $('#sneakers');
            sneakersContainer.append('<h2 class="text-light">Sneaker releases</h2>');
            data.sneakers.forEach(function(sneaker) {
                const sneakerElement = $('  <div class="col mt-2 ">');
                sneakerElement.html(`
                        <div class="card ">
                            <div class="card-body bg-dark " >
                                <img src="${sneaker.image}" class="img-fluid">
                                <h3 class="text-light" >${sneaker.name}</h3>
                                <p class="card-text text-light">Release Date: ${sneaker.releaseDate}</p>
                                <p class="card-text text-light">Price: $${sneaker.price}</p>
                    
                        </div>
                        </div>
                    `);
                sneakersContainer.append(sneakerElement);
            });
        },
        error: function() {
            console.error('Failed to fetch sneakers data.');
        }
    });
});





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