<?php

    get_header();

?>

<main>
    <section class="section__hero">
        <div class="hero grid grid--2-cols">
          <div class="hero__textContainer">
            <h1 class="hero__heading heading heading--primary">
              This is a custom-made WordPress theme
            </h1>
            <p class="hero__description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, nesciunt, vitae corrupti a, magni et nihil commodi ipsa ipsam perspiciatis enim nobis incidunt. Dolorem officia quasi iusto ipsam corrupti laboriosam, veniam sequi soluta quas aliquam, nam, dolores aperiam voluptatibus sit rerum. Incidunt, quisquam fuga. Eveniet iusto aut aspernatur quisquam quas.
            </p>
            <div class="hero__btnsContainer">
                <a href="#" class="btn btn--primary margin-right-sm"
                >Blog</a
                >
                <a href="#" class="btn btn--outline">Learn more &darr;</a>
            </div>
          </div>
          <div class="hero__imgContainer">
            <img
              src="<?php echo get_theme_file_uri('/assets/img/hero-img.jpeg') ?>"
              class="hero__img"
              alt="A ballon flying"
            />
          </div>
        </div>
      </section>

      <section class="section__logos">
          <div class="container">
          <h2 class="logos__heading">Theme featured in</h2>
          <div class="logos__container">
            <img src="<?php echo get_theme_file_uri('/assets/img/logos/techcrunch.png') ?>" alt="Techcrunch logo" />
            <img
              src="<?php echo get_theme_file_uri('/assets/img/logos/business-insider.png') ?>"
              alt="Business Insider logo"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/img/logos/the-new-york-times.png') ?>"
              alt="The New York Times logo"
            />
            <img src="<?php echo get_theme_file_uri('/assets/img/logos/forbes.png') ?>" alt="Forbes logo" />
            <img src="<?php echo get_theme_file_uri('/assets/img/logos/usa-today.png') ?>" alt="USA Today logo" />
          </div>
        </div>
      </section>

      <section class="section__info">
          <div class="headings__container container">
              <span class="info__subheading subheading">News</span>
              <h2 class="info__heading heading heading--secondary">See what's happening</h2>
          </div>
          <div class="container grid grid--2-cols">
              <div class="events__container">
                <h3 class="event__heading heading heading--3">Upcoming Events</h3>

                <div class="event-summary">
                    <a class="event-summary__date event-link" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title heading heading--5"><a class="event-link" href="#">Poetry in the 100</a></h5>
                        <p class="event-summary__text">Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="event-summary__link">Learn more</a></p>
                    </div>
                </div>

                <div class="event-summary">
                    <a class="event-summary__date event-link" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title heading heading--5"><a class="event-link" href="#">Quad Picnic Party</a></h5>
                        <p class="event-summary__text">Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="event-summary__link">Learn more</a></p>
                    </div>
                </div>

               <p><a href="#" class="btn btn--primary">View All Events</a></p>
              </div>

            <div class="events__container">
                <h3 class="event__heading heading heading--3">Recent blog posts</h3>

                
                <div class="event-summary">
                    <a class="event-summary__date event-link" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                    </a>
                    <div class="event-summary__content">
                    <h5 class="event-summary__title heading heading--5"><a class="event-link" href="#">Poetry in the 100</a></h5>
                    <p class="event-summary__text">Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="event-summary__link">Learn more</a></p>
                    </div>
                </div>

                <div class="event-summary">
                    <a class="event-summary__date event-link" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                    </a>
                    <div class="event-summary__content">
                    <h5 class="event-summary__title heading heading--5"><a class="event-link" href="#">Quad Picnic Party</a></h5>
                    <p class="event-summary__text">Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="event-summary__link">Learn more</a></p>
                    </div>
                </div>

                <p><a href="#" class="btn btn--primary">View All Blog Posts</a></p>
            </div>
            
            </div>
          </div>
      </section>

      

</main>


<?php

    get_footer();

?>