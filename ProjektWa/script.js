var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);



$(document).ready(function() {
    $.ajax({
        url: 'https://raw.githubusercontent.com/MartinKunes/API-boty/main/sneakers.json',
        dataType: 'json',
        success: function(data) {
            const sneakersContainer = $('#sneakers');
            sneakersContainer.append('<h2 class="text-light">Sneaker releases</h2>');
            data.sneakers.forEach(function(sneaker) {
                const sneakerElement = $('<div class="col"></div>');
                sneakerElement.html(`
                        <div class="card ">
                            <div class="card-body bg-dark w-100" >
                                <img src="${sneaker.image}" class="img-responsive" height="450px" alt="...">
                                <h3 class="text-light">${sneaker.name}</h3>
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

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});

