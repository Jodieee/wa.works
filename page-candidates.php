<?php

get_header();


                
    $backgroundHow = get_field('background_color_candidates_how_does_it_work');
?>

<?php
include('menu-candidates.php');
?>
<div class="content"> 
    
    <div id="candidates_introduction_wrapper">
        
        <div class="float-left">
            <?php
    
                $color = get_field('wa_mascottes_introduction_candidates_hompage');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img class="mascotte_introduction" src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
        </div>
        
        <div class="float-right">
            <h1><?php the_field('h1_introduction_candidates'); ?><br><br><br>
                
                <a class="sign-up-button background-FuchsiaBlue" href="https://app.wa.works/public/signup">Sign up</a>
                </h1>

        </div>
        

    <div class="clearfix"></div>
   
        
    </div>
    
</div>
    
    
    <div class="triangle-violentviolet-svg"></div>
       <div id="candidates_how_does_it_work_wrapper" class="<?php echo 'background-' . $backgroundHow;  ?>">
           <div class="content"> </div>
    
  
    
    
    
    </div>
    
    <div class="saw-svg"></div>
    
    
     <div id="candidates_candidates_wrapper" class="background-BrinkPink">
    <div class="content"> </div>
    </div>
    <div class="wigglyline-svg"></div>
       <div id="candidates_listings_wrapper" class="background-Broom">
    <div class="content"> </div>
    </div>
    <div class="saw-svg"></div>
    
    <div id="candidates_blog_wrapper" class="background-SeaBuckthorn">
    <div class="content"> </div>
    </div>
    <div class="wigglyline-svg"></div>
    
    
    <div id="candidates_team_wrapper" class="background-Shamrock">
    <div class="content"> </div>
    </div>
    

<div class="clearfix"></div>
	<?php

include('footer-candidates.php');

wp_footer();
