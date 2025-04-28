<div class="nav-bar">
    <div class="container-lg">
        <div class="nav-wrapper">
            <div class="nav-left">
                <?php get_template_part('/home/social'); ?>
            </div>
            <div class="nav-secondary-right">
                <?php 
                    wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_class' => 'nav-ul'
                    )
                    )
                ?>
            </div>
        </div>
        
    </div>
</div>