<?php get_header(); ?>
<header>
  <h1>La Guilde des Héros</h1>
  <nav>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Membres</a></li>
      <li><a href="#">Raids</a></li>
      <li><a href="#">Forum</a></li>
    </ul>
  </nav>
</header>

<main>
  <section>
    <h2>Dernières nouvelles</h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
  </section>
</main>

<?php get_footer(); ?>
