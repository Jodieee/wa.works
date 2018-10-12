<div class="clearfix"></div>


<div class="wigglyline-svg shape-footer"></div>
<footer class="background-ViolentViolet">

    <div class="footer-content-wrapper">
    
        <div>
                <h1>Sign up for our newsletter:</h1>

            <input class="input-newsletter background-Gallery" type="text" value="Email Adress"/>
            <input class="sign-up-newsletter background-FuchsiaBlue" type="submit" value="Sign up" />  
        </div>


        <?php if( have_rows('social_media_footer', 'option') ): ?>

        <ul class="slides">

        <?php while( have_rows('social_media_footer', 'option') ): the_row(); 

            // vars
            $image = get_sub_field('logo_platform', 'option');
            $link = get_sub_field('link_social_media_platform', 'option');

            ?>

            <li class="slide">

                <?php if( $link ): ?>
                    <a href="<?php echo $link; ?>">
                <?php endif; ?>

                    <img class="social-media-icons-footer" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <?php if( $link ): ?>
                    </a>
                <?php endif; ?>

                <?php echo $content; ?>

            </li>

        <?php endwhile; ?>

        </ul>

    <?php endif; ?>




        <div class="clearfix"></div>

            <?php
        $color = get_field('wa_mascottes_choice_candidates', 'option');

        $mascotte = 'WA-' . $color . '.png';
                    ?>
                    <img class="mascotte-footer" src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
    
    
    </div>
</footer>