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

  if ($('#elementosProyecto').length > 0){
    $('.typeItemProyect').on('change', function(){
      var idItemProyect     = $(this).parent().attr('id');
      console.log(idItemProyect);
      if ($('#' + idItemProyect + ' .typeItemProyect option:selected').val() == 'Imagen' ){
        //$('#' + idItemProyect + ' .image-upload').removeClass('hide');
        $('#' + idItemProyect + ' + .image-preview').removeClass('opacity-0');
      } else {
        //$('#' + idItemProyect + ' .image-upload').addClass('hide');
        $('#' + idItemProyect + ' + .image-preview').addClass('opacity-0');
      }
    }); 
  }

  if ($('#requerimientodiv').length > 0){
    /* ready */
    if($('#in-requerimiento-25').is(':checked')){/* ÁREA CREATIVA */
      $('#area-creativa').removeClass('hide');
    } else {
      $('#area-creativa').addClass('hide');
    }
    if($('#in-requerimiento-27').is(':checked')){/* ÁREA CREATIVA */
      $('#area-industrial').removeClass('hide');
    } else {
      $('#area-industrial').addClass('hide');
    }
    if($('#in-requerimiento-28').is(':checked')){/* ÁREA CREATIVA */
      $('#area-social-media').removeClass('hide');
    } else {
      $('#area-social-media').addClass('hide');
    }
    if($('#in-requerimiento-26').is(':checked')){/* ÁREA CREATIVA */
      $('#area-ux-ui').removeClass('hide');
    } else {
      $('#area-ux-ui').addClass('hide');
    }

    $('#in-requerimiento-25').click(function() { /* ÁREA CREATIVA */
      if($(this).is(':checked')){
        $('#area-creativa').removeClass('hide');
      } else {
        $('#area-creativa').addClass('hide');
      }
    });
    $('#in-requerimiento-27').click(function() { /* ÁREA CREATIVA */
      if($(this).is(':checked')){
        $('#area-industrial').removeClass('hide');
      } else {
        $('#area-industrial').addClass('hide');
      }
    });
    $('#in-requerimiento-28').click(function() { /* ÁREA CREATIVA */
      if($(this).is(':checked')){
        $('#area-social-media').removeClass('hide');
      } else {
        $('#area-social-media').addClass('hide');
      }
    });
    $('#in-requerimiento-26').click(function() { /* ÁREA CREATIVA */
      if($(this).is(':checked')){
        $('#area-ux-ui').removeClass('hide');
      } else {
        $('#area-ux-ui').addClass('hide');
      }
    });
  }

});