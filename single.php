<?php get_header(); ?>
<div class="container-lg">

    <?php get_template_part('blog/post-image'); ?>

    <div class="post-container-wrapper">
        <div class="post-container-left">
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('blog/post-categories'); ?>
        </div>
        <div class="post-container-right">
            <?php get_template_part('template-parts/sidebar'); ?>
        </div>
    </div>

</div>


left
    post-content

    /* Category, tags apart */
    post-categories
        post-writeen-by
            author-img
            Written by
            author-name
        post-all-categories
            post-category-wrapper
                Associates
            post-category-wrapper
                Salesforce
    post-tags
        post-tag-wrapper
            Data Model
        post-tag-wrapper
            Roll-up
    post-share-article
        Share this Article
        icon-linkedin
        icon-twitter

right
    side-bar



<?php get_footer(); ?> 