<?php

get_header();
?>

<header>
    
</header>


 <a href="candidates">
     <div class="background-ViolentViolet choice-div float-left">
    
        <?php
            
           $title = get_field('h1_candidates_choice');

            if( !empty($title) ){ ?>
        
                <h1 class="h1_choice tk_bree"><?php the_field('h1_candidates_choice'); ?></h1>
  
        <?php
                                }

        ?>
    
         
         <?php
            
           $candidates = get_field('candidates_photo_choice');

            if( !empty($candidates) ){ ?>
        
                <img src="<?php echo $candidates['url']; ?>" alt="<?php echo $candidates['alt']; ?>" />
  
        <?php
                                }

        ?>
    
    </div>

</a>

 <a href="companies">
    <div class="background-Turquoise choice-div float-right">
         <?php
            
           $title = get_field('h1_companies_choice');

            if( !empty($title) ){ ?>
        
                <h1 class="h1_choice tk_bree"><?php the_field('h1_companies_choice'); ?></h1>
  
        <?php
                                }

        ?>

           <?php
            
           $companies = get_field('companies_photo_choice');

            if( !empty($companies) ){ ?>
        
                <img src="<?php echo $companies['url']; ?>" alt="<?php echo $companies['alt']; ?>" />
  
        <?php
                                }

        ?>

    </div>
</a>

<?php
    
    
    if( get_field('wa_mascottes') == 'fuchsiablue' ){
        ?>
        <p>this is purple blue idk, you did it!</p>
<?php
        
    } else{
        ?>
        <p>Honey you fucked up!</p>
<?php
    }


?>

    <div class="clearfix"></div>

	<?php
wp_footer();
