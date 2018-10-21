<?php get_header(); ?>
<section id="contenu">
	
	<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<article class="actu_page">
			<h2><?php the_title(); ?></h2>
		  <?php the_content(); ?>
		 


		</article>
		<?php
	} // end while
} // end if
?>
</section>


<?php get_footer(); ?>
