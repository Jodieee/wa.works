

<?php if( have_rows('images_place') ): ?>
<div class="block images">
	<ul class="slides">

	<?php while( have_rows('images_place') ): the_row(); 

		// vars
		$image = get_sub_field('images_repeater');

		?>

		<li class="slide">


				<img src="<?php echo $image['sizes']['images']; ?>" alt="<?php echo $image['alt'] ?>" />
                

		</li>

	<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>


