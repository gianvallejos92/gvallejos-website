<?php get_header(); ?>
<div class="container-lg">

    <?php get_template_part('blog/post-image'); ?>

    <div class="post-container-wrapper">
        <div class="post-container-left">
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('blog/post-categories'); ?>
            <?php get_template_part('blog/post-tags'); ?>
            <?php get_template_part('blog/share-article'); ?>
        </div>
        <div class="post-container-right">
            <?php get_template_part('template-parts/sidebar'); ?>
        </div>
    </div>

    <div class="about-cta m-top-xs ">
        <a href="#" class="btn btn-green">
            Leave me a Comment
        </a>
    </div>

    <?php get_template_part('blog/post-more'); ?>

</div>

<?php get_footer(); ?> 