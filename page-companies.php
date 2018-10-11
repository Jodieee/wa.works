<?php

get_header();
?>
<?php
include('menu-companies.php');

?>
<div class="content">
    
    <div id="companies_introduction_wrapper">
        
        <div class="float-left">
            <?php
    
                $color = get_field('wa_mascottes_introduction_companies_hompage');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img class="mascotte_introduction" src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
        </div>
        
        <div class="float-right">
            <h1><?php the_field('h1_introduction_companies'); ?><br><br><br>
                
                <a class="sign-up-button background-Turquoise" href="https://app.wa.works/public/signup">Sign up</a>
                </h1>



                
        </div>
        

    <div class="clearfix"></div>
   
        
    </div>
    
</div> 


    <div class="triangle-oxfordblue-svg"></div>
    
     <div id="companies_how_does_it_work_wrapper" class="background-RadicalRed">
    
         <div class="content"></div>
    
    
    
    </div>
    
    
     <div id="companies_companies_wrapper" class="background-BrinkPink">
    <div class="content"></div>
    </div>
    
       <div id="companies_listings_wrapper" class="background-Broom">
    <div class="content"></div>
    </div>
    
    <div id="companies_blog_wrapper" class="background-SeaBuckthorn">
    <div class="content"></div>
    </div>
    
    
    <div id="companies_team_wrapper" class="background-Shamrock">
    <div class="content"></div>
    </div>
    




	<?php
include('footer-companies.php');
wp_footer();
