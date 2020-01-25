<?php get_header(); ?>
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/page.css" rel="stylesheet" />

<div class="ft ft--sidebar">
	<main class="page--content" role="main">
		<div class="page--header">
			<h1 class="page--title"><?php the_title(); ?></h1>
		</div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'cheapweb' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
