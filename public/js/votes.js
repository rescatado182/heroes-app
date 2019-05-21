
jQuery( function($) {

    if (typeof(Storage) !== "undefined") {
        // LocalStorage disponible
        console.log("LocalStorage disponible");
    } else {
        // LocalStorage no soportado en este navegador
        console.log("LocalStorage disponible");
    }

});

/* Voting System */
$(".thumbs-up").on("click", function(ev) {

    ev.preventDefault();

    var currentHeroe    = $(this).prop("rel");
    var objHeroe        = ( localStorage.getItem(currentHeroe) != undefined ? JSON.parse(localStorage.getItem(currentHeroe)) : null);

    if( objHeroe !== null) {
        objHeroe.votes =  objHeroe.votes + 1;
    }
    else {
        objHeroe = {
            name: currentHeroe,
            votes: 1
        }
    }

    window.localStorage.setItem(currentHeroe, JSON.stringify(objHeroe));
});

$(".thumbs-down").on("click", function(ev) {

    ev.preventDefault();

    var currentHeroe    = $(this).prop("rel");
    var objHeroe        = ( localStorage.getItem(currentHeroe) != undefined ? JSON.parse(localStorage.getItem(currentHeroe)) : null);

    if( objHeroe !== null) {
        objHeroe.votes = ( objHeroe.votes > 0 ? objHeroe.votes - 1 : 0);
    }
    else {
        objHeroe = {
            name: currentHeroe,
            votes: 1
        }
    }

    window.localStorage.setItem(currentHeroe, JSON.stringify(objHeroe));
});




