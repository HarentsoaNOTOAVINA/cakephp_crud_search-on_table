/**
 * Created by aren'tsU on 2017-09-21.
 */
    //==== Upload image
$("div#id_dropzone").dropzone({
    url: BASE_URL + "contacts/uploadFiles",
    addRemoveLinks: true,
    maxFileSize: 20, //20Mo
    //parallelUploads: 100, //max number of images to upload at once = 100
    uploadMultiple: false,
    autoProcessQueue: true, //if we want all files sent at once
    createImageThumbnails: true,
    acceptedFiles: ".xls, .pdf, .docx",

    //totaluploadprogress
    //processing
    //uploadprogress
    uploadprogress: function (file) {
        //console.log(progress);
        if(file.uploadprogress){
            $('#submit_all').attr("disabled", true); //desactiver button submit if process

            $('#submit_all').click(function () {
             $('#submit_all').click(function(){
             confirm("Des images sont en cours d'upload. Voulez-vous sauvegarder sans ces images ?");
             });
             });
        }
    },

    success: function (file, reponse) {
        $('#submit_all').removeAttr("disabled"); //reactiver button submit if success
        console.log('image uploaded');
        //alert(reponse);
        var obj = jQuery.parseJSON(reponse);
        if (obj.success) {
            var nameFile = obj.name;
            //alert('name '+nameFile);

            var index = $(".dz-preview").length - 1; //count index
            if (index == undefined) {
                index = 0;
            } else {
                index = $(".dz-preview").length - 1
            }

            var nameInput = '<input type="hidden" class="nombreInput" value="' + nameFile + '" name="images[][nom]" />';
            $(".dz-preview:last-child").append(nameInput);
        } else {
            this.removeFile(file);
            alert('Erreur sur la connexion. Veuillez reverifier puis réessayer.');
        }
    },


    removedFile: function (file) {
        alert(file.name);
        $.ajax({
            url: BASE_URL + "cantacts/removeFiles",
            type: "POST",
            data: {'name': file.name}
        });
    },

    accept: function (file, done) {
        done();
    },

    dictRemoveFile: "Supprimer",
    dictCancelUpload: "Annuler",
    dictDefaultMessage: "<span class='kl_parcourir'>Ajouter une image</span>"
});

//=== Delete image in edit
$(".kl_deleteImgEdit").click(function () {
    var idTodelete = $(this).attr('id').slice(7);
    var theInput = '<input type="checkbox" name="imgToDelete[]" value="' + idTodelete + '" checked />';
    $(".kl_listeToDelete").append(theInput);
    $(".kl_theImgEdit_" + idTodelete).hide();
});

