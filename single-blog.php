<?php

get_header();
?>

<main> 
    <h1>page about</h1>
    
    
     <?php
$args = array(
    'posts_per_page' => '-1', //-1 betekend eindeloos alle posts laten zien
    'post_type' => 'blog',
        'order' => 'ASC'
);
//init WP_Query
$query = new WP_Query( $args );

//The loop
if  ( $query->have_posts() ) {
    
        ?>

        <div class="container">

        <?php
    while ( $query->have_posts() ) { $query->the_post();
?>

    
    <a class="thumb" style="background:aqua;"  href="<?php the_permalink(); ?>">
        
            <?php
            }
         the_content(); ?>
            
        
    </a>
    
            
    <?php
            } 
        }
    ?>
 </div> <!--.container sluit hier af -->
<?php
}
// Reset Post Data
wp_reset_postdata();

    
?>

</main>

	<?php
wp_footer();
