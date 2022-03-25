<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>

        <section class="section__page-banner">
            <div class="container">
            <div class="page-banner__content">
                <h1 class="page-banner__title heading heading--primary"><?php the_title(); ?></h1>
                <div class="page-banner__intro">
                <p>See what's happening.
                </p>
                </div>
                <div class="page-banner__links">
                        <div class="page-banner__linksContainer">
                        <a class="page-banner__homeLink page-banner__link" href="<?php site_url('/blog'); ?>">Blog Home</a> <span class="page-banner__secondaryLink page-banner__link">Posted by <?php the_author_posts_link(); ?> on <?php the_time('j.n.y') ?> in <?php echo get_the_category_list(', ') ?> </span>
                        </div>
                    </div>
            </div>
            </div>
        </section>

        <section class="section__blog">
            <div class="container">
                
                        <div class="generic-content">

                            <?php the_content(); ?>

                        </div>
                    </div>
                
                <?php }

                ?>
            </div>
        </section>

<?php 

    get_footer();

?>