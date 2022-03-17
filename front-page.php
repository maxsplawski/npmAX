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
          <div class="container">

          </div>
      </section>
</main>


<?php

    get_footer();

?>