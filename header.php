<!DOCTYPE html>
<html>
        <head>
            <?php wp_head();?>
        </head>
<header>
    <div class="container">
        <?php
            wp_nav_menu(
                array(
                    'theme_location'=>'top-menu',
                    'menu_class'=>'top-bar',
                )
            )
        ?>
    </div>    
</header>

<body <?php body_class();?>>