
/**
 * Diese Funktion ist extra in einer neuen Datei weil sonst der script 2x geladen worden werde
 * und somit ein Album 2x erstellt worden werde würde dings
 */

$('.newDocumentAjaxButton').on('click', function (event){
    event.preventDefault();
    // alert("super funktioniert");
    $.ajax({
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Document-newDocument',
        // data: $(this).serialize(), Funktioniert nur bei einer Form NICHT bei einem Button
        data: {
            userid: $(this).data('userid'),
            documentdescription: $(this).data('documentdescription'),
            documentname: $(this).data('documentname')
        }
    })
        /** Data ist der Platzhalter für die Route die übergeben wird also
         * die Funktion ajaxPageDocument aus dem LearningAreacontroller.*/
        .done(function(data){
            // Die Seite soll neu geladen werden
            $('#reloadDocument').html(data)
        })
        .fail(function () {
            console.log("Das Ding ist fehlgeschlagen");
        })

})