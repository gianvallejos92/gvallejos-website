<div id="project-detail" class="m-top-md">
    <div class="section-title text-center p-top-lg p-bottom-md">
        <h2><?php echo get_the_title(); ?></h2>
    </div>
    <div class="container-lg">
        <div class="project-description p-bottom-md">
            <?php echo get_the_content(); ?>
        </div>
        <div class="project-description-img-wrapper">
            <?php if ( get_field( 'portafolio-img-01' ) ) : ?>
                <img src="<?php the_field( 'portafolio-img-01' ); ?>" class="project-description-img m-bottom-s" />
            <?php endif ?>
            <?php if ( get_field( 'portafolio-img-02' ) ) : ?>
                <img src="<?php the_field( 'portafolio-img-02' ); ?>" class="project-description-img m-bottom-s" />
            <?php endif ?>
            <?php if ( get_field( 'portafolio-img-03' ) ) : ?>
                <img src="<?php the_field( 'portafolio-img-03' ); ?>" class="project-description-img m-bottom-s" />
            <?php endif ?>
        </div>
        <?php get_template_part('/projects/more'); ?>
        <?php get_template_part('/includes/btn-work'); ?> 
    </div>

</div>