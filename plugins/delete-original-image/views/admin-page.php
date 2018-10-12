<div class="wrap">
    <h2>Delete Original Images</h2>
    <?php if (!empty($message)): ?>
        <p class="error" style="margin-top:10px;">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>

    <?php if (count(get_settings_errors()) > 0) : ?>
        <div class="error">
            <?php
            foreach (get_settings_errors() as $errorArr) {
                echo $errorArr['message']
//                    .' ('.$errorArr['setting'].')'
                . '<br>' . "\n";
            };
            ?>
        </div>
    <?php endif; ?>

    <p>
        Delete Original Image is a Wordpress plugin to delete the the original image file uploaded.

    </p>

    <p>

        The problem that solves, is that the original image file is usually huge (can be >6MB if it is a photograph) and it is never published on the pages

        so there is no need to keep it on your server, and it it a must to delete it, if you have limited storage space and you are uploading

        tons of pictures.
    </p>

    <p>
        The plugin gives you the option to enable/disable this, to be done automatically when you upload an image.

        And/or you can do it in bulk for all your previously uploaded images.
    </p>

    <p>
        Specifically, this plugin copy the 'large' image ( i.e: your-pic-1038x576.jpg ) to the original file path ( i.e.: your-pic.jpg ).
    </p>

    <hr>

    <br>

    <form method="post" action="options.php" enctype="multipart/form-data">
        <?php do_settings_sections('doi_admin_page'); ?>
        <?php settings_fields('doi_options_group'); //what does this do? ?>
        <?php submit_button(); ?>
    </form>

    <hr>

    <br>

    <h2>Bulk remove original images</h2>

    <p>
        This action will copy the 'large' image ( i.e: your-pic-1038x576.jpg ) to the original file path ( i.e.: your-pic.jpg ) for all you uploaded images.
    </p>
    <p>
    Nothing brakes, you will not need to update any posts, all other plugins should keep working, but you need to know that the original image is no longer available on your site,
    <strong>so we encourage you to backup your images before</strong>.

    </p>
    <form method="post" action="#" id="delete-all-originals" >
        <input type="hidden" name="delete-all-original-images" value="delete" />
        <?php submit_button('Delete All Original Images'); ?>
    </form>

    <hr>

    <br>

    If you want to say thanks, <a href="https://wordpress.org/plugins/delete-original-image/" target="_blank" rel="noopener">please rate</a>
    and/or <a href="https://paypal.me/cminatti" target="_blank" rel="noopener">donate</a>

    <script type="text/javascript" >
        jQuery("form#delete-all-originals").on('submit', function (e) {
            if (confirm("This option will delete all your original uploaded images and can't be undo, but it will not brake anything. Continue?")) {
//                jQuery("form#delete-all-originals").submit();
                return true;
            } else {
                e.preventDefault();
                return false;
            }
            ;
        });
    </script>
</div>