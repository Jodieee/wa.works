<?php
//$values = get_field('col_repeater');
//var_dump($values);

// Get partials
$dir = get_template_directory() . '/template-parts/blocks';
$files = scandir($dir);

// Partials loop
foreach ($files as $file):

if (strpos($file, 'acf-') !== false) {
    $f_r = str_replace('acf-', '', $file);
    $f = preg_replace('/\\.[^.\\s]{3,4}$/', '', $f_r);

    if ( get_row_layout() === $f )
        get_template_part('template-parts/blocks/acf', $f);
}
endforeach;