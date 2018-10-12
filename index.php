<?php

get_header();
?>

<?php


  include('menu-candidates.php');



?>

<div class="content"> 
    <h1>Blog</h1>
    
    
     <?php
$args = array(
    'posts_per_page' => '-1', //-1 betekend eindeloos alle posts laten zien
    'post_type' => 'blog',
    'orderby' => 'publish_date',
    'order' => 'DESC'
);
//init WP_Query
$query = new WP_Query( $args );

//The loop
if  ( $query->have_posts() ) {
    
        ?>

        <div class="container">

        <?php
    while ( $query->have_posts() ) { $query->the_post();
                                    
       $header = get_field('header_blogpost'); 
       $title = get_field('title_blogpost'); 
       $catagory = get_field('catagory_blogpost');
       $size = get_field('size_thumbnail_blog');
?>

            
    
    <a class="thumb <?php echo $size;  ?>" style="background-image: url(<?php echo $header['url']; ?>); background-size:cover;"  href="<?php the_permalink(); ?>">
        
        <?php
        if( !empty($title) ){ ?>
        
        
        <h1 class="<?php echo 'background-' . $catagory;  ?>"><?php echo $title; ?></h1>
        
        
        <?php } ?>
            <?php
            }
         the_content(); ?>
            
        
    </a>
    <?php
            }
    
     
        
    ?>
                
 </div> <!--.container sluit hier af -->
<?php

// Reset Post Data
wp_reset_postdata();

    
?>

</div>

	<?php

  include('footer-candidates.php');

wp_footer();
