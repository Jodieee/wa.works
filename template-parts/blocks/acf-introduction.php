<?php

    $catagory = get_field('catagory_blogpost');
    $intro = get_sub_field('introduction_blogpost');
    
    if($intro){
        ?>

        <div class="block text introduction-paragraph">
            <?php
        echo '<p>' . $intro . '</p>';
            ?>
            </div>

<img src="<?php echo get_template_directory_uri() . '/img/line-after-intro-' . $catagory . '.png'; ?>" alt="WA-mascotte">
                
                
                
                <?php
        
    }

?>





