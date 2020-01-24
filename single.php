<?php get_header(); ?>

	<main role="main">


	<link href="<?php echo get_stylesheet_directory_uri() ?>/css/article.css" rel="stylesheet" />

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="article--title"><?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="entry-date"><?php the_time('F j, Y'); ?></span>
			<span class="author"><?php _e( 'Published by', 'cheapweb' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="post--comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'cheapweb' ), __( '1 Comment', 'cheapweb' ), __( '% Comments', 'cheapweb' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'cheapweb' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'cheapweb' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'cheapweb' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

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
