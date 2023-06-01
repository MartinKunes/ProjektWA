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