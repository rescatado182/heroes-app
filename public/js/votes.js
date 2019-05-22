
jQuery( function($) {

    if (typeof(Storage) !== "undefined") {
        // LocalStorage disponible
        console.log("LocalStorage disponible");
    } else {
        // LocalStorage no soportado en este navegador
        console.log("LocalStorage disponible");
    }

    var heroesCarousel = $("#heroes-carousel");

    if( heroesCarousel ) {
        getHeroesRating();
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


function getHeroesRating()
{
    $.ajax({
        url: "/heroes.json",
        method: "GET",
        dataType: "JSON"
    }).done( function(data) {

        let results = [];

        if( data ) {

            var k = 0;
            
            $.each(data, function( i, val ) {
            
                var result = "";

                var objHeroe = ( localStorage.getItem(val["name"]) != undefined ? JSON.parse(localStorage.getItem(val["name"])) : null);

                if( objHeroe ) {

                    result += '<div class="col-md-4">'
                                + '<div class="item-box-blog">'
                                    + '<div class="item-box-blog-image">'
                                        + '<figure><img alt="' + val["name"] +'" src="' + val["picture"] + '" /><figure>'
                                    + '</div>'
                                    + '<div class="item-box-blog-body">'
                                        + '<div class="item-box-blog-heading">'
                                            + '<a href="#">'
                                                + '<h5>' + val["name"]  + '</h5>'
                                            + '</a>'
                                        + '</div>'
                                        + '<div class="item-box-blog-data" style="padding: px 15px;">'
                                            + '<p><i class="fa fa-user-o"></i> <i class="fa fa-star"></i> ' + objHeroe.votes + '</p>'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>';
                    
                    //if( k % 3 === 0)
                        //
                    
                    results[k] = result;

                    k++;
                
                }

                if( k > 9 )
                    return false;
            
            }); // End each

            var html = '<div class="carousel-item active">'
                        + '<div class="row">';
            
            for(var i = 0; i < 3; i++ ) {
                
                if( results[i] ) {
                    html += results[i]
                }
            }
            html +=  '</div></div>';

            html += '<div class="carousel-item">'
                        + '<div class="row">';
            
            for(var i = 3; i < 6; i++ ) {
                
                if( results[i] ) {
                    html += results[i]
                }
            }
            html +=  '</div></div>';

            html += '<div class="carousel-item">'
                        + '<div class="row">';
            
            for(var i = 6; i < 9; i++ ) {
                
                if( results[i] ) {
                    html += results[i]
                }
            }
            html +=  '</div></div>';

            html += '<div class="carousel-item">'
                        + '<div class="row">';
                
            if( results[9] )
                html += results[9]

            html +=  '</div></div>';

            console.log(html);

            $("#heroes-carousel .carousel-inner").append(html);
        }
        
    })
    .fail(function( jqXHR, textStatus ) {
        console.log( "Request failed: " + textStatus );
    });

}


