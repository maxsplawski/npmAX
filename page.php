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
            

            <div class="page-banner__links">
                <div class="page-banner__linksContainer">
                <a class="page-banner__homeLink page-banner__link" href="#">Back to About me</a> <span class="page-banner__secondaryLink page-banner__link">Our History</span>
                </div>
            </div>
            </div>
        </section>

        <section class="section__page">
            <div class="container">
                <!-- <div class="page-links">
                    <h2 class="page-links__title"><a class="link" href="#"><?php the_title(); ?></a></h2>
                    <ul class="page-links__list">
                    <li class="current-page-item"><a class="link" href="#">Our History</a></li>
                    <li><a class="link" href="#">Our Goals</a></li>
                    </ul>
                </div> -->

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