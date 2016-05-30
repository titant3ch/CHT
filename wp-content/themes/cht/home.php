<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="single">
		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>

		<a href="#0" class="cd-top">Top</a>

	</section>

</div>

<?php get_footer(); ?>