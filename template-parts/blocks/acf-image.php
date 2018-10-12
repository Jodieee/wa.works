<?php

$image = get_sub_field('image_blogpost');

if( !empty($image) ){ ?>

    <div class="block image">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    <?php
    }
    
    ?>


