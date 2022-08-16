//alert("hey");

// $(document).ready(function ($){
//     alert("super funzt");
// })

$('#newAlbumForm').on('submit', function (event){
    event.preventDefault();
    // alert("super funktioniert");
    $.ajax({
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Album-newAlbum',
        /** Formulardaten holen in einem lesbaren string */
        data: $(this).serialize(),
        
        /** veraltet -- success hat man früher verwendet 
        success: function(data) {}*/
    })
        /** Data ist der Platzhalter für die Route die übergeben wird also
         * die Funktion ajaxPagePhotoAlbum aus dem photoalbumcontroller.*/
        .done(function(data){
            // Die Seite soll neu geladen werden
            $('#reloadPhotoAlbum').html(data)
        })
        .fail(function () {
            console.log("Das Ding ist fehlgeschlagen");
        })

})


