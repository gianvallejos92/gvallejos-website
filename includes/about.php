<div id="about">
    <div class="section-title text-center p-top-lg p-bottom-md">
        <?php dynamic_sidebar('about-title') ?>
    </div>
    <div class="container-lg">
        <div class="about-wrapper p-bottom-md ">
            <div class="about-description">
                <?php dynamic_sidebar('about-description') ?>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/image/gian-photo-about-me.png' ?>" alt="">
            </div>
        </div>
        <?php get_template_part('/includes/btn-work'); ?>        
    </div>
</div>
