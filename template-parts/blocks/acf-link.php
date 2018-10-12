<?php

$link = get_sub_field('link_blogpost');

if( !empty($link) ){ 
            ?>

        <div class="block link">
            <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">Click on me to see it: <?php echo the_title(); ?></a>
        </div>
<?php
}
?>


