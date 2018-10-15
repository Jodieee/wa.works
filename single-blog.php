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
       
       <div class="content blogpost-container">
        <?php if( have_rows('blogpost_items') ) :
       while ( have_rows('blogpost_items') ) : the_row();
           get_template_part( 'template-parts/content');
    endwhile; else :
          get_template_part( 'template-parts/content-none' );    
   endif;   
    ?>
       
</div>
</main>


<div class="previous-next-blogposts content">
    

        
        
            
    
         <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): ?>
    
        <?php
       $headerPrevious = get_field('header_blogpost', $prev_post->ID); 
       $titlePrevious = get_field('title_blogpost', $prev_post->ID); 
       $catagoryPrevious = get_field('catagory_blogpost', $prev_post->ID);
?>
            
              <a class="thumb-previous" style="background-image: url(<?php echo $headerPrevious['url']; ?>); background-size:cover;"  href="<?php echo $prev_post->guid ?>">
            
             <?php
            if( !empty($titlePrevious) ){ ?>


            <h1 class="<?php echo 'background-' . $catagoryPrevious;  ?>"><?php echo $titlePrevious; ?></h1>


            <?php } ?>
                <?php
             the_content(); ?>
                  </a>
        <?php endif ?>

     
     <?php
        $next_post = get_next_post();
        if (!empty( $next_post )): ?>
    
            <?php
               $headerNext = get_field('header_blogpost', $next_post->ID); 
               $titleNext = get_field('title_blogpost', $next_post->ID); 
               $catagoryNext = get_field('catagory_blogpost', $next_post->ID);
        ?>
    
              <a class="thumb-next" style="background-image: url(<?php echo $headerNext['url']; ?>); background-size:cover;"  href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
            
            <?php
            if( !empty($titleNext) ){ ?>


            <h1 class="<?php echo 'background-' . $catagoryNext;  ?>"><?php echo $titleNext; ?></h1>


            <?php } ?>
                <?php
             the_content(); ?>
                  </a>
        <?php endif; ?>

</div>

	<?php
wp_footer();
