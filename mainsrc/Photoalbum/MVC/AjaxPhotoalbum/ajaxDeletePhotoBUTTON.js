
/**
 * Diese Funktion ist extra in einer neuen Datei weil sonst der script 2x geladen worden werde
 * und somit ein Album 2x erstellt worden werde würde dings
 */

$('#deletePhoto').on('click', function (event){
    event.preventDefault();
    // alert("super funktioniert");
    $.ajax({
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Photo-Delete',
        // data: $(this).serialize(), Funktioniert nur bei einer Form NICHT bei einem Button
        // data: $(this).serialize(),
        // data: {
        //     documentid: $(this).data('documentid'),
        // }
    })
        /** Data ist der Platzhalter für die Daten die Er bekommt aus der Route vom Index
         * die wiederum  übergeben werden von der Funktion ajaxNewDocumentFunction und
         * ajaxPageDocument als render aus dem DocumentController.*/
        done(function(data){
            // Die Seite soll neu geladen werden
            $('#reloadPhotoAlbum').html(data)
        })
        .fail(function () {
            console.log("Das Ding ist fehlgeschlagen");
            alert("Das Ding ist fehlgeschlagen");
        })

})