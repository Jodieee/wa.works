<?php

get_header();
?>
<?php
include('menu-companies.php');

?>
<main> 
    
    <div id="companies_introduction_wrapper">
        
        <div class="float-left">
            <?php
    
                $color = get_field('wa_mascottes_introduction_companies_hompage');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img class="mascotte_introduction" src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
        </div>
        
        <div class="float-right">
            <h1><?php the_field('h1_introduction_companies'); ?><br>
                </h1>



                <a class="sign-up-button background-Turquoise" href="https://app.wa.works/public/signup">Sign up</a>
        </div>
        

    <div class="clearfix"></div>
   
        
    </div>
    
    
     <div id="companies_how_does_it_work_wrapper" class="background-RadicalRed">
    
        <div></div>
    
    
    
    </div>
    
    
     <div id="companies_companies_wrapper" class="background-BrinkPink">
    
    </div>
    
       <div id="companies_listings_wrapper" class="background-Broom">
    
    </div>
    
    <div id="companies_blog_wrapper" class="background-SeaBuckthorn">
    
    </div>
    
    
    <div id="companies_team_wrapper" class="background-Shamrock">
    
    </div>
    
</main>



	<?php
include('footer-companies.php');
wp_footer();
