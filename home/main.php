<div id="section-main"> 
  
    <div class="container-lg">   

      <div class="nav">
        <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'top_menu',
                'menu_class' => 'nav-ul'
              )
            )
        ?>
      </div>

      <?php get_template_part('/home/content'); ?>

    </div>   

    <div class="bg-img-wrapper">
      <img src="<?php echo get_template_directory_uri() . '/assets/image/background-img-test.jpg' ?>" alt="Background Image" />
    </div>

</div>