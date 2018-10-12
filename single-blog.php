<?php

get_header();


$catagory = get_field('catagory_blogpost');
?>

  
    <?php
    
    
    $header = get_field('header_blogpost'); 

        if( !empty($header) ) { ?>

    <header style="background-image: url(<?php echo $header['url']; ?>);">
        
        
        <?php $title = get_field('title_blogpost'); ?>
        
    
      <?php } 
    if( !empty($title) ){ ?>
        
            <div class="content">

                <h1 class="<?php echo 'background-' . $catagory;  ?>"><?php echo $title; ?></h1>

             </div>
            <?php } ?>
            
                               
    </header> 

  
   <main>
        <?php if( have_rows('blogpost_items') ) :
       while ( have_rows('blogpost_items') ) : the_row();
           get_template_part( 'template-parts/content');
    endwhile; else :
          get_template_part( 'template-parts/content-none' );    
   endif;   
    ?>
       

</main>

	<?php
wp_footer();
