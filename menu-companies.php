<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<?php $path = '/wa-works/'; ?>

<nav class="background-OxfordBlue">
    
    
    <div class="mobile-nav">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <span class="background-Turquoise"></span>
    <span class="background-Turquoise"></span>
    <span class="background-Turquoise"></span>
    
    <ul id="menu" class="background-OxfordBlue">
    
        <div>
             <li>
                    <a href="<?php echo $actual_link . '/home'; ?>">
                        <p class="tk_bree">Home</p>
                    </a>
                </li>
                <li>
                    <a href="#companies_candidates_wrapper">
                        <p class="tk_bree">Candidates</p>
                    </a>
                </li>
                <li>
                    <a href="#companies_companies_wrapper">
                        <p class="tk_bree">Companies</p>
                    </a>
                </li>
                <li>
                    <a href="#companies_listings_wrapper">
                        <p class="tk_bree">Listings</p>
                    </a>
                </li>
                <li>
                    <a href="blog">
                        <p class="tk_bree">Blog</p>
                    </a>
                </li>
                <li>
                    <a href="about">
                        <p class="tk_bree">About</p>
                    </a>
                </li>

                <li>
                    <a class="button-switch" href="index.php">
                        <p class="tk_bree">Switch</p>
                    </a>
                </li>
            </div>
        
        </ul>
    </div>
  </div>

    
    
    <?php
    $color = get_field('wa_mascottes_choice_companies', 'option');
    
    $mascotte = 'WA-' . $color . '.png';
                ?>
                <img src="<?php echo get_template_directory_uri() . '/img/' . $mascotte;  ?>" />

    <?php
   echo '<pre>';
		print_r( get_field('wa_mascottes_choice_companies', 'option') );
	echo '</pre>';
?>
    <ul class="desktop">
        <li>
            <a class="desktop" href="<?php echo $path . 'companies' ?>">
                <p class="tk_bree">Home</p>
            </a>
        </li>
        <li>
            <a class="desktop" href="<?php echo $path . 'companies/#companies_candidates_wrapper' ?>">
                <p class="tk_bree">Candidates</p>
            </a>
        </li>
        <li>
            <a class="desktop" href="<?php echo $path . 'companies/#companies_companies_wrapper' ?>">
                <p class="tk_bree">Companies</p>
            </a>
        </li>
        <li>
            <a class="desktop" href="<?php echo $path . 'companies/#companies_listings_wrapper' ?>">
                <p class="tk_bree">Listings</p>
            </a>
        </li>
        <li>
            <a class="desktop" href="<?php echo $path . 'blog' ?>">
                <p class="tk_bree">Blog</p>
            </a>
        </li>
        <li>
            <a class="desktop" href="<?php echo $path . 'about' ?>">
                <p class="tk_bree">About</p>
            </a>
        </li>
        
            <li>
                <a class="button-switch desktop" href="index.php">
                    <p class="tk_bree">Switch</p>
                </a>
            </li>
    
    </ul>
    
    
     <div class="clearfix"></div>
    
    
    
   <div>
    <a class="button-sign-in background-Turquoise desktop" href="https://app.wa.works/?_ga=2.90907738.1905780514.1538982210-398959901.1535446834"> Log in</a>
    </div> 
    
 
        
       
    
</nav>


 <div class="clearfix"></div>