<?php get_header(); ?>
<section id="contenu">
	
	<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<article class="actu">
			<h2><?php the_title(); ?></h2>
			<figure class="img_intro">
				<a harf="<?phpthe_permalink(); ?>">
					<?php the_post_thumbnail("thumbnail"); ?></a>
				
			</figure>
			<?php the_content("lire la suite..."); ?>
			<p><em>Ecrit par <?php the_author();  ?> , le <?php the_time(get_option('date_format')); ?> -<?php comments_number(); ?>  </em></p>
		  
		   <p>
		   	<?php the_tags(); 
            $category = get_the_category();
            echo "<em>category ".$category[0]->name."</em>";
		   	?>
		   	
		   	</p>
		</article>
		<?php
	} // end while
} // end if
?>
</section>

<?php get_template_part('sidebar'); ?>
<?php get_footer(); ?>
