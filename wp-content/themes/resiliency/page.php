<?php 
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
        <article class="page-layout">
			<?php the_content() ?>
        </article>
	
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
?>
<?php get_footer();?>