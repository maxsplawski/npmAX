<?php 

    get_header();

    while(have_posts()) {
        the_post();
    

?>

    <section class="section__page-banner">
        <div class="container">
            <div class="page-banner__content">
                <h1 class="page-banner__title heading heading--primary"><?php the_title(); ?></h1>
                <div class="page-banner__intro">
                <p>Learn how this theme got started.</p>
                </div>
            </div>
            
            <?php
                $parentID = wp_get_post_parent_id(get_the_ID());
                if($parentID) {
                    
            ?>
                    <div class="page-banner__links">
                        <div class="page-banner__linksContainer">
                        <a class="page-banner__homeLink page-banner__link" href="<?php the_permalink($parentID); ?>">Back to <?php echo get_the_title($parentID); ?></a> <span class="page-banner__secondaryLink page-banner__link"><?php the_title(); ?></span>
                        </div>
                    </div>

                <?php };
            ?>

            </div>
        </section>

        <section class="section__page">
            <div class="container">
                <?php 
                    $testArray = get_pages(array(
                        'child_of' => get_the_ID()
                    ));
                    
                    if($parentID or $testArray) { 
                    
                ?>
                <div class="page-links">
                    <h2 class="page-links__title"><a class="link" href="<?php get_permalink($parentID) ?>"><?php echo get_the_title($parentID); ?></a></h2>
                    <ul class="page-links__list">
                    <?php
                        if($parentID) {
                            $findChildrenOf = $parentID;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }

                        wp_list_pages(array(
                            'title_li' => NULL,
                            'child_of' => $findChildrenOf,
                        ));
                    ?>
                    </ul>
                </div>
                <?php } ?>

                <div class="generic-content">
                    <?php 
                        the_content();
                    ?>
                </div>
            </div>
        </section>


<?php 
    }
    get_footer();

?>