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
            </div>
            </div>
        </section>

        <section class="section__blog">
            <div class="container">
                   
                    <div class="post-item">
                        <h2 class="post-item__heading heading heading--secondary"><a class="link" href="<?php site_url('/blog'); ?>">Blog Home</a></h2>
                        <div class="post-item__author">
                            <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j.n.y') ?> in <?php echo get_the_category_list(', ') ?> </p>
                        </div>
                        <div class="generic-content">
                            <?php the_excerpt(); ?>

                            <a class="btn btn--outline" href="<?php the_permalink(); ?>">Read more &raquo;</a>
                        </div>
                    </div>
                
                <?php }

                ?>
            </div>
        </section>

<?php 

    get_footer();

?>