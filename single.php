<?php get_header(); ?>

	<main class="post-content" role="main">


	<link href="<?php echo get_stylesheet_directory_uri() ?>/css/article.css" rel="stylesheet" />

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        else { ?>
                            <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/img/defaultpostthumbnail.jpg" alt=""></figure>
                        <?php } ?>

			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="article--title"><?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="entry-date"><?php the_time('F j, Y'); ?></span>
			<div class="single__org--cw">
				<?php _e( '', 'cheapweb' ); the_category(' / '); // Separated by commas ?>
			</div>
			<span class="post--comments"><span class="icon-thing"><i data-feather="message-square"></i></span><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Wil je reageren?', 'cheapweb' ), __( '1 Comment', 'cheapweb' ), __( '% Comments', 'cheapweb' )); ?></span>
			<!-- /post details -->
			<div class="article--content">
				<?php the_content(); // Dynamic Content ?>
				<?php comments_template(); ?>
			</div>


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'cheapweb' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
