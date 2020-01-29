<?php
/* TEMPLATE NAME: Artikelen Overzicht */
?>


<?php get_header(); ?>

<link href="<?php echo get_stylesheet_directory_uri() ?>/css/page.css" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/article.css" rel="stylesheet" />
<!-- ARTIKELEN OVERZICHT -->
<main class="page--content">
    <div class="page--header">
        <h1 class="page--title">Artikelen Overzicht</h1>
        <div class="page--intro">
            <p>Om jouw start zo vloeiend en goedkoop mogelijk te houden, deel ik hier al mijn ervaringen. Het varieert van code tot online marketing.
            Heb jij andere ervaringen of heb ik iets mis, laat dan een berichtje achter als comment of stuur mij een email via: info@cheap-websites.nl </p>

        </div>
    </div>

    <!-- <div class="search-bar">
        <h3>Doorzoek het overzicht:</h3>
        <?php //echo get_search_form( $echo = true ) ?>
    </div> -->

    <section class="article--overview">
        <ul class="article--list">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <li class="article">
                    <h2 class="article--title"><?php the_title(); ?></h2>
                    <?php // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        else { ?>
                            <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/img/defaultpostthumbnail.jpg" alt=""></figure>
                        <?php } ?>

                    <div class="article--details">
                        <span class="entry-date"><?php echo get_the_date('j F Y'); ?></span>
                        <div class="single__org--cw">
                        <?php _e( '', 'cheapweb' ); the_category(' / '); // Separated by commas ?></div>
                        <span class="post--comments"><span class="icon-thing"><i data-feather="message-square"></i></span><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Wil je reageren?', 'cheapweb' ), __( '1 reactie', 'cheapweb' ), __( '% Comments', 'cheapweb' )); ?></span>
                    </div>
                    <div class="article--content">
                        <?php the_excerpt(); ?> <!-- Page Content -->
                    </div>
                </li><!-- .entry-content-page -->

            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </ul>
    </section>

</main>



<?php get_footer(); ?>