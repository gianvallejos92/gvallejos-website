<div id="projects">
    <div class="section-title text-center p-top-lg p-bottom-s">
        <?php dynamic_sidebar('title-project') ?>
    </div>

    <?php 
        $cnt = 1;
        $MAX_NUM_COLORS = 8;
        $args = array(
            'post_type' => 'proyecto',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'date'
        );

        $proyectos = new WP_Query($args);
        $nro_posts = $proyectos->found_posts;
    ?>
    <div class="container-lg">  
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
    </div>
</div>
