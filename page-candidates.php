<?php

get_header();
?>

<?php
include('menu-candidates.php');
?>
<main> 
    
    <div id="candidates_introduction_wrapper">
        
        <div class="float-left">
            <?php
    
                $color = get_field('wa_mascottes_introduction_candidates_hompage');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img class="mascotte_introduction" src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
        </div>
        
        <div class="float-right">
            <h1><?php the_field('h1_introduction_candidates'); ?><br>
                </h1>



                <a class="sign-up-button background-FuchsiaBlue" href="https://app.wa.works/public/signup">Sign up</a>
        </div>
        

    <div class="clearfix"></div>
   
        
    </div>
    
    

    <div id="candidates_how_does_it_work_wrapper">
    
        <div></div>
    
    
    
    </div>
    
    
</main>
<div class="clearfix"></div>
	<?php

include('footer-candidates.php');

wp_footer();
