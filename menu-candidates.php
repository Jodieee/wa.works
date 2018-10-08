<nav class="background-ViolentViolet">
    
    <?php
    $color = get_field('wa_mascottes_choice_candidates', 'option');
    
    if( !empty($color) ){
                $mascotte = 'WA-' . $color . '.png';
                ?>
                <img src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />
   
    <?php
    }
    
    ?>
    <ul>
        <li>
            <a href="index.php">
                <p class="tk_bree">Home</p>
            </a>
        </li>
        <li>
            <a href="#">
                <p class="tk_bree">Candidates</p>
            </a>
        </li>
        <li>
            <a href="#">
                <p class="tk_bree">Companies</p>
            </a>
        </li>
        <li>
            <a href="#">
                <p class="tk_bree">Listings</p>
            </a>
        </li>
        <li>
            <a href="#">
                <p class="tk_bree">Blog</p>
            </a>
        </li>
        <li>
            <a href="page-about.php">
                <p class="tk_bree">About</p>
            </a>
        </li>
        
            <li>
                <a class="button-switch" href="index.php">
                    <p class="tk_bree">Switch</p>
                </a>
            </li>
    
    </ul>
    
    
     <div class="clearfix"></div>
    
    
    
   <div>
    <a class="button-sign-in background-FuchsiaBlue" href="https://app.wa.works/?_ga=2.90907738.1905780514.1538982210-398959901.1535446834"> Log in</a>
    </div> 
    
 
        
       
    
</nav>


 <div class="clearfix"></div>