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
    <div class="content">
        
        <h1>Candidates</h1>
        
        <?php
        $i = 0;
         
        
        if( have_rows('reviews_repeater') ){ 
        
         while ( have_rows('reviews_repeater') ) { 
             
             the_row();
             $i++;
             $image = get_sub_field('reviews-img');
             $review = get_sub_field('review');
             $person = get_sub_field('review_written_by');
        
             
             
        ?>
        
        
         <div class="candidates-companies-reviews">
             
            
             <div class="candidates-companies-reviews-wrap">
                 <div class="candidates-companies-reviews-img float-left" style="background-image: url(<?php echo $image['url']; ?>); background-size:cover;  background-position: center; "></div>
                 <div class="candidates-companies-reviews-review float-left">
                     
                     <h3><?php echo $review; ?></h3>
                     <h4><?php echo $person; ?></h4>
                 
                 </div>
                 
                
             </div>
             
             
             <?php
                                                     
                }
             }
        ?>
             <div class="clearfix"></div>


             <div class="button-reviews background-FuchsiaBlue">
                <a class="button-reviews background-FuchsiaBlue" href="https://app.wa.works/?_ga=2.90907738.1905780514.1538982210-398959901.1535446834">Become one</a> 
             </div>

        
         </div>
         
         
         
         </div>
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
