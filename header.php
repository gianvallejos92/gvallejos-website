<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php 
        if (get_the_title() == 'Inicio') {
            get_template_part('/includes/nav-secondary');
        } else {            
            get_template_part('/includes/nav-primary');
        }
    
    ?>