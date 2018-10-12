

<?php

    $text = get_sub_field('paragraph_blogpost');
    
    if($text){
        ?>

        <div class="block text">
            <?php
        echo '<p>' . $text . '</p>';
            ?>
            </div>
<?php
        
    }

?>

