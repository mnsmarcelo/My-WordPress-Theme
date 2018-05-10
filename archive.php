<?php get_header(); ?>
<main>
  <div class="container">
    <div class="col-md-8  col-lg-9  container--list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>               

          <div class="post  post--list">
        <div class="row">
          <div class="col-sm-6  col-md-6  post__image">
            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('large'); ?>" title="<?php the_title(); ?>" /></a>
          </div>
          <div class="col-sm-6  col-md-6  post__list-content">
            <div class="post__info  post__info--date">
              <span><?php the_time('d/M/Y') ?></span>              
            </div>
            <div class="post__title">
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="post__content">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="post__content-more-link">
              <a href="<?php the_permalink() ?>">Leia mais</a>
            </div>
          </div>
        </div>
      </div>   

      <?php endwhile?>
            
      <?php else: ?>
            
      <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>