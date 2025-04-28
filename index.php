<?php get_header(); ?>

<div class="blog-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : ?>
                    <div class="blog-posts">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <?php echo get_the_date(); ?>
                                        </span>
                                        <span class="byline">
                                            Por <?php the_author(); ?>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>

                                <footer class="entry-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
                                </footer>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => __('Anterior', 'textdomain'),
                            'next_text' => __('Siguiente', 'textdomain'),
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <p>No se encontraron entradas.</p>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
