<?php get_header(); ?>

	<main class="page--content search-results" role="main">

        <link href="<?php echo get_stylesheet_directory_uri() ?>/css/search.css" rel="stylesheet" />


			<h1><?php echo sprintf( __( '%s resultaten gevonden voor: ', 'cheapweb' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php //get_template_part('loop'); ?>
            <section>
                    <!-- section -->
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <!-- post thumbnail -->
                        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
                            </a>
                        <?php endif; ?>
                        <!-- /post thumbnail -->

                        <!-- post title -->
                        <h2 class="article--title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <!-- /post title -->

                        <!-- post details -->
                        <span class="entry-date"><?php the_date('F j, Y'); ?></span>
                        <span class="post--comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'cheapweb' ), __( '1 Comment', 'cheapweb' ), __( '% Comments', 'cheapweb' )); ?></span>
                        <!-- /post details -->

                        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

                        <?php edit_post_link(); ?>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>

                    <!-- article -->
                    <article>
                        <h2><?php _e( 'Helaas! Geen resultaten gevonden waar je op zocht.', 'cheapweb' ); ?></h2>
                    </article>
                    <!-- /article -->

                <?php endif; ?>

            </section><!-- /section -->
        			<?php get_template_part('pagination'); ?>



	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
