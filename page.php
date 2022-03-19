<?php 

    get_header();

    while(have_posts()) {
        the_post();
    

?>

    <section class="section__page-banner">
        <div class="container">
            <div class="page-banner__content">
                <h1 class="page-banner__title heading heading--primary">Theme's history</h1>
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
                <div class="page-links">
                    <h2 class="page-links__title"><a class="link" href="#">About Us</a></h2>
                    <ul class="min-list">
                    <li class="current_page_item"><a class="link" href="#">Our History</a></li>
                    <li><a class="link" href="#">Our Goals</a></li>
                    </ul>
                </div>

                <div class="generic-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
                </div>
            </div>
        </section>


<?php 
    }
    get_footer();

?>