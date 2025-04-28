<?php get_header(); ?>

<div id="page">
    <div class="section-title text-center p-top-lg p-bottom-s">
        <h2><?php single_cat_title(); ?></h2>        
    </div>    
    <?php 
        $cnt = 1;
        $MAX_NUM_COLORS = 8;
        $category = get_queried_object();
        
        $args = array(
            'post_type' => 'proyecto',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'date',
            'cat' => $category->term_id
        );

        $proyectos = new WP_Query($args);
        $nro_posts = $proyectos->found_posts;
    ?>
    <div class="container-lg text-center">  
        <div class="cat-description m-bottom-s">
            <?php echo category_description(); ?>
        </div>
        <div class="<?php if($nro_posts <= 4) { echo 'projects-flex'; } else { echo 'projects-grid'; } ?> jc-space-between p-bottom-md"> 
        <?php 
            if ($proyectos->have_posts()) {
                while ($proyectos->have_posts()) {
                    $proyectos->the_post();
                
        ?>
            
            <div class="project-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="project-item-brand">
                        <img src="<?php the_field( 'logotipo' ); ?>" alt="Proyecto Logo">
                    </div>
                    <?php 
                    
                    the_post_thumbnail();

                    $tmp_class = 'pj-color-' . $cnt;
                    $cnt++;
                    if ($cnt == $MAX_NUM_COLORS) {
                        $cnt = 1;
                    }

                    ?>
                    <div class="overlay <?php echo $tmp_class; ?>">
                    </div>
                </a>
            </div>

        <?php 
                }
            }
        ?>           
        </div>
        <?php get_template_part('/includes/btn-work'); ?> 
    </div>
</div>


<?php get_footer(); ?>
