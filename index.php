<?php
/* TEMPLATE NAME: Article Overview */

?>


<?php get_header(); ?>

<link href="<?php echo get_stylesheet_directory_uri() ?>/css/page.css" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/article.css" rel="stylesheet" />

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

                    <span class="entry-date"><?php echo get_the_date(); ?></span>
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