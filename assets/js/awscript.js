jQuery(function($){
    $('body').on('click', '.aw_upload_image_button', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Selecione uma imagem',
            button: {
                text: 'Definir imagem'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image').val(attachment.url);
        })
        .open();
    });
});

jQuery(function($){
    $('body').on('click', '.aw_upload_image_button2', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Selecione uma imagem',
            button: {
                text: 'Definir imagem'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image2').val(attachment.url);
        })
        .open();
    });
});

jQuery(function($){
    $('body').on('click', '.aw_upload_image_button3', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Selecione uma imagem',
            button: {
                text: 'Definir imagem'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image3').val(attachment.url);
        })
        .open();
    });
});

jQuery(function($){
    $('body').on('click', '.aw_upload_image_button4', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Selecione uma imagem',
            button: {
                text: 'Definir imagem'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image4').val(attachment.url);
        })
        .open();
    });
});