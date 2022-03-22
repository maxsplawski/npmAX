<?php

    get_header();

?>

    <section class="section__page-banner">
        <div class="container">
            <div class="page-banner__content">
                <h1 class="page-banner__title heading heading--primary"><?php 
                    the_archive_title();
                ?></h1>
                <div class="page-banner__intro">
                <p><?php the_archive_description(); ?>
                </p>
                </div>
            </div>
            </div>
        </section>

        <section class="section__blog">
            <div class="container">
                <?php

                    while(have_posts()) {
                        the_post(); ?>
                   
                    <div class="post-item">
                        <h2 class="post-item__heading heading heading--secondary"><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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