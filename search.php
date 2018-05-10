<?php 
/*
  Template Name: Search Page
*/
get_header();
?>
<main>   
<div class="container">
  <div class="col-md-8  col-lg-9">
    <div class="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post__info  post__info--date">
        <span><?php the_time('d/M/Y') ?></span>
      </div>
      <div class="post__title">
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
      </div>   
      <div class="post__image">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('featuredImage'); ?></a>
      </div>
      <div class="post__content">
          <?php the_content(); ?>
      </div>   
      <?php endwhile; else: ?>
        <div class="artigo">
          <h2>Nada Encontrado</h2>
          <p>Erro 404</p>
          <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>            
      <?php endif; ?>              
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
</main>
<?php get_footer(); ?>