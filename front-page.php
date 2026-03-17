<?php 
  // Template Name: Front-page
  get_header(); ?>

  <main class="site-content">

  <!-- HERO -->
  <section class="hero alignfull">
    <div class="hero__media">
      <video 
      autoplay 
      muted 
      loop 
      playsinline 
      class="hero__video"
      >
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/compressed_2.mp4" type="video/mp4">
      </video>
  </div>

  <div class="hero__content">
    <p class="hero__eyebrow">Välkommen till Vadstena</p>

    <h1 class="hero__title">
      <span>EN LITEN STAD</span><br>
      <span>MED STOR HISTORIA</span>
    </h1>

    <a href="#" class="hero__button">
      Utforska sevärdheter
    </a>
  </div>
</section>

  <!-- Gutenberg content -->
  <div class="gutenberg">
    <?php the_content(); ?>
  </div>

</main>

<?php get_footer(); ?>