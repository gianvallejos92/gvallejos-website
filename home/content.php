<div class="content">

    <div class="main-lockup">

        <?php dynamic_sidebar('title-main'); ?>

        <div class="main-lockup-description">
            <?php dynamic_sidebar('title-description'); ?>
        </div>
        <div class="cta">
        <a href="/contact" class="btn btn-blue">Let's start your project</a>
        </div>    
    </div>

    <div class="main-img">

        <?php get_template_part('/home/social'); ?>   

        <img 
            src="<?php echo get_template_directory_uri() . '/assets/image/gian-photo-img.png' ?>" 
            class="main-img-content"
            alt="GVallejos Software Engineer" />
   
    </div>

</div>