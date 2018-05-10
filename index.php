<?php get_header(); ?>
<main>
  <div class="container">
    <div class="col-md-8  col-lg-9  container--list">
    <?php $countBanner = 0; if ( have_posts() ) : while ( have_posts() ) : the_post();?>               

          <div class="post  post--list">
        <div class="row">
          <div class="col-sm-6  col-md-6  post__image">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('listPosts');   ?></a>            
          </div>
          <div class="col-sm-6  col-md-6  post__list-content">
            <div class="post__info  post__info--date">
              <span><?php the_time('d/M/Y') ?></span>          
              <span><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>    
            </div>
            
            <div class="post__title">
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="post__content">
              <p><?php the_excerpt();  $countBanner++; ?></p>
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

      <nav class="col-md-12  blog-pagination">
            <ul class="blog-pagination__items">
              <li class="blog-pagination__item">
              <?php previous_posts_link( '<i class="fa fa-angle-left" aria-hidden="true"></i> Posts mais recentes' ); ?>               
              </li>
              <li class="blog-pagination__item">
              <?php next_posts_link( 'Posts mais antigos <i class="fa fa-angle-right" aria-hidden="true"></i>' ); ?>
              </li>           
            </ul>
          </nav>

    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>