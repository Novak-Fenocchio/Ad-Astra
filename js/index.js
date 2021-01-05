ScrollReveal().reveal('.article_planet', { delay: 200 });
ScrollReveal().reveal('.quote_section', { delay: 200 });
ScrollReveal().reveal('.footer', { delay: 250 });
ScrollReveal().reveal('#title_calculator', { delay: 250 });
ScrollReveal().reveal('#calculate', { delay: 250 });


$('#calculate').on('click', function() {
    var planet = $('#planet').val();
    var lightVelocity = 300000000;
    var Distance;
    $('#planetName').empty();
    $('#duration').empty();
    $('#question').empty();
    $('#distance').empty();

    switch (planet) {
        case 'Mercury':
            var Distance = 70000000000;
            break;
        case 'Earth':
            var Distance = 150000000000;
            break;
        case 'Mars':
            var Distance = 249000000000;
            break;
        case 'Jupiter':
            var Distance = 741000000000;
            break;
        case 'Saturn':
            var Distance = 1510000000000;
            break;
        case 'Uranus':
            var Distance = 3000000000000;
            break;
        case 'Neptune':
            var Distance = 4550000000000;
            break;
        case 'Pluton':
            var Distance = 7380000000000;
            break;

    }
    var timeHours = (Distance / lightVelocity) / 60;
    var time = timeHours.toFixed(1);
    var timeMin = Math.trunc(time);


    $('.section_result').show();
    $('#planetName').append(planet);
    $('#duration').append(time + ' minutes.');
    $('#question').append(timeMin + ' minutes');
    $('#distance').append(Distance);

});