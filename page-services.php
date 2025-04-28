<?php get_header(); ?>

<div id="page">
    <div class="section-title text-center p-top-lg p-bottom-s">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="container-lg text-center">
        <div class="wp-content-block p-bottom-md">            
            <?php the_content(); ?>
        </div>              
        <?php get_template_part('/projects/main'); ?>
        <?php get_template_part('/includes/btn-work'); ?> 
    </div>
</div>


<?php get_footer(); ?>
