<?php

  get_header();?>

<style>
	.size-large-thumbnail{
		width:100%;
		height:450px;
	}
</style>

<section class="blog_area">
<div class="container" style="padding:70Px;">
<div class="row">
<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
 <div class="col-md-12">
<article class="blog_style1">
<div class="blog_img">
<?php the_post_thumbnail( 'large-thumbnail' ); ?>
</div>
<div class="blog_text">
<div class="blog_text_inner">
<div class="cat">
	<?php
		$categories = get_the_category();
		$comma      = ', ';
		$output     = '';
		
		if ( $categories ) {
			foreach ( $categories as $category ) {
				$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
			}
			echo trim( $output, $comma );
		} ?>

<a href="<?php get_the_date('Y');?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time( 'F jS, Y' ); ?></a>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?></a>
</div>
<a href="<?php the_permalink() ?>"><h4><?php the_title() ?></h4></a>
<?php the_content();?>
</div>
</div>
</article>

</div>	
	<?php endwhile;
 
else :
	echo '<p>something missing!</p>';
endif;
?>`
</div>
</div>
</section>


<?php get_footer();?>