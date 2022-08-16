
/**
 * Diese Funktion ist extra in einer neuen Datei weil sonst der script 2x geladen worden werde
 * und somit ein Album 2x erstellt worden werde würde dings
 */

$('.newAlbumAjaxButton').on('click', function (event){
    event.preventDefault();
    // alert("super funktioniert");
    $.ajax({
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Album-newAlbum',
        // data: $(this).serialize(), Funktioniert nur bei einer Form NICHT bei einem Button
        data: {
            userid: $(this).data('userid'),
            albumdescription: $(this).data('albumdescription'),
            albumname: $(this).data('albumname')
        }
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