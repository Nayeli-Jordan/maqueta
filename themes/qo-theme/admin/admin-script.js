jQuery(document).ready(function ($) {
  /*Image gallery*/
  // Instantiates the variable that holds the media library frame.
  var meta_image_frame;
  // Runs when the image button is clicked.
  $('.image-upload').click(function (e) {
    var forButtonUpload = $(this).attr('for'); //Image upload for
    // Get preview pane
    var meta_image_preview = $(this).parent().parent().children('.image-preview');
    // Prevents the default action from occuring.
    e.preventDefault();
    var meta_image = $(this).parent().children('.meta-image');
    // If the frame already exists, re-open it.
    //No funciona si se pretende jalar más de una imagen diferente
    /*if (meta_image_frame) {
      meta_image_frame.open();
      return;
    }*/
    // Sets up the media library frame
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
      title: meta_image.title,
      button: {
        text: meta_image.button
      }
    });
    // Runs when an image is selected.
    meta_image_frame.on('select', function () {
      // Grabs the attachment selection and creates a JSON representation of the model.
      var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
      // Sends the attachment URL to our custom image input field.
      meta_image.val(media_attachment.url);
      meta_image_preview.children('img').attr('src', media_attachment.url);
    });
    // Opens the media library frame.
    meta_image_frame.open();
  });

  /*Cotizaciones detect template*/
  if ($('.post-php.post-type-qo_cotizaciones').length > 0) {
    if(document.getElementById('page_template').value == "templates-cotizacion/qo-cotizacion-horizontal.php") {
        $('body').addClass('templateHorizontal');
    } else if(document.getElementById('page_template').value == "templates-cotizacion/qo-cotizacion-vertical.php") {
        $('body').addClass('templateVertical');
    } else if(document.getElementById('page_template').value == "templates-cotizacion/qo-cotizacion-details.php") {
        $('body').addClass('templateDetails');
    } else {
        $('body').addClass('templateDefault');
    }    
  }


  /*Botón Calendario en sistema*/
  if ($('.post-php.post-type-sistema').length > 0) {
    document.getElementById('calendario-stm-adder').innerHTML = '<a id="new-calendar" href="../wp-admin/admin.php?page=my-calendar" target="_blank">Crear Calendario</a><p>Guarda tus cambios y recarga después de crear tu calendario, así podrás visualizarlo en esta sección</p>';
  }

  /*Disabled options for user*/
  if ($('.user-editor').length > 0) {
    $('.user-editor input:not(.editor-time), .user-editor select:not(.editor-estatus), .user-editor textarea').prop( "disabled", true );
    $('input[type=checkbox]').attr("disabled", true);
    $('#new-calendar').css("display", "none");
  }

});