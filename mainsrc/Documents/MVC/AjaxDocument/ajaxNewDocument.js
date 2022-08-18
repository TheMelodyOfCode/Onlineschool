

$('#newDocumentForm').on('submit', function (event){
    event.preventDefault();
    
    // alert("super funktioniert");
    $.ajax({
        /** Das Formular wird mit dem Typ POST abgesendet   */
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Document-newDocument',
        /** Formulardaten holen in einem lesbaren string 
         * geht nur bei einer Form nicht bei einem Button */
        // this bezieht sich auf das Formular und serialized ist ein lesbarar string
        data: $(this).serialize(),
        
       
        /** veraltet -- success hat man früher verwendet 
        success: function(data) {}*/
    })
        /** Data ist der Platzhalter für die Route die übergeben wird also
         * die Funktion ajaxPagePhotoAlbum aus dem DocumentController.*/
        .done(function(data){
            // Die Seite soll neu geladen werden
            $('#reloadDocument').html(data)
        })
        .fail(function () {
            console.log("Das Ding ist fehlgeschlagen");
            alert("Das Ding ist fehlgeschlagen");
        })
})


