
    <?php

		// vars
		$prototype = get_sub_field('prototype_place');
    
        if( !empty($prototype) ){ 
            
            ?>
            <div class="block prototype">
            <?php
            the_sub_field('prototype_place');
            ?>
                
            </div>
<?php
    
    }
    

	
   ?>             
