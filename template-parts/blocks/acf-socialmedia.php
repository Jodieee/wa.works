<?php 

$socialmedia = get_field('social_media_place');

if( !empty($socialmedia) ){

$link = get_sub_field('instagram_link_place');

if( $link ): ?>

	<a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
       
        
        <?php 

            $image = get_sub_field('instagram_logo_place');

                if( !empty($image) ){ ?>

                <img class="social-media-logo-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                
                
                <?php
                                  
                }
    
            ?>

    </a>

<?php endif; 

}