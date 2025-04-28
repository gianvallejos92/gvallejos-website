<?php 
    global $post;
    $cnt = 1;
    $MAX_NUM_COLORS = 8;
    
    $current_post_type = get_post_type($post);

    $args = array(
        'post_per_page' => 4,
        'order' => 'DESC',
        'orderby' => 'modified',
        'post_type' => $current_post_type,
        'post__not_in' => array( $post->ID )
    );

    $query = new WP_Query ($args);
    $nro_posts = $query->found_posts;
    if ($query->have_posts()) {
?>

<div class="section-title m-top-lgg text-center">
    <h2>More Work</h2>
</div> 
<div class="<?php if($nro_posts <= 4){ echo 'projects-flex '; }else { echo 'projects-grid '; } ?> jc-space-between m-top-lgg m-bottom-md">
<?php 
        while ($query->have_posts()) {
            $query->the_post();
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