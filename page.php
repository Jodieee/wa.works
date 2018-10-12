<?php

get_header();
?>


 <a href="candidates">
     <div class="background-ViolentViolet choice-div float-left">
    
        <?php
            
           $title = get_field('h1_candidates_choice');

            if( !empty($title) ){ ?>
        
              <div>
                  <h1 class="h1_choice tk_bree"><?php the_field('h1_candidates_choice'); ?></h1>
              </div>
         
         
        <?php
                                }

        ?>
    
         <?php
    
                $color = get_field('wa_mascottes_choice_candidates');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />

    </div>

</a>

 <a href="companies">
    <div class="background-OxfordBlue choice-div float-right">
         <?php
            
           $title = get_field('h1_companies_choice');

            if( !empty($title) ){ ?>
        
            <div>
                <h1 class="h1_choice tk_bree"><?php the_field('h1_companies_choice'); ?></h1>
            </div>
                
                
        <?php
                                }


            $color = get_field('wa_mascottes_choice_companies');
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />

    </div>
</a>

    <div class="clearfix"></div>

	<?php
wp_footer();
