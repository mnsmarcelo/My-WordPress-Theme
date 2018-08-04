<?php get_header();

$next = get_permalink(get_adjacent_post(false,'',true));
$next_title = get_the_title(get_adjacent_post(false,'',true));
$prev = get_permalink(get_adjacent_post(false,'',false));
$prev_title = get_the_title(get_adjacent_post(false,'',false));

?>
<main>   
<div class="container">
        <div class="col-md-8  col-lg-9">
          <div class="post">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post__info  post__info--date">
              <span></span>
            </div>
            <div class="post__title">
              <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            </div>   
            <div class="post__info  post__info--category">
              <span><?php foreach((get_the_category()) as $category) { echo '<a href="/category/'.$category->slug.'">'.$category->cat_name . '</a> '; } ?></span>
            </div>         
            <div class="post__image">
              <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('large'); ?>" title="<?php the_title(); ?>" /></a>
            </div>

            <div class="post__content">
                <?php the_content(); ?>
            </div>    
            
            <div class="post__tags">
              <h3>Tags</h3>
              <div class="post__tags-list">
                  <?php the_tags( '', ', ', '<br />' ); ?>
              </div>
            </div>
            
            <div class="post__footer">
             <h3>Compartilhe nas redes sociais</h3>
               <div class="addthis_inline_share_toolbox"></div>               
            </div>         
            
             <div>
            	<a href="https://marcelosousa.me/?meta=banner#page7"><img src="<?php bloginfo('template_url'); ?>/assets/marcelo-web-deceloper.jpg" title="Marcelo Sousa Web Developer"/></a>
            </div> 
            
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="https://blog.marcelosousa.me/wp-content/uploads/2018/01/foto-perfil-pequena.jpeg" title="Autor Marcelo Sousa" alt="Autor">
              </div>
              <div class="post__author-info">
                <h5>por Marcelo Sousa</h5>
                <p>Estudante de Analise de Sistemas e importado de Rondônia, com cinco anos atuando no  desenvolvimento de software para a web. Atualmente anda empolgado com o poder do ES6.</p>
                <div class="post__author-info-social">
                  <a href="https://www.facebook.com/mns.marcelo" target="_blank">
                    <svg>
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>
                    </svg>
                  </a>                
                  <a href="https://www.instagram.com/mnsmarcelo/" target="_blank">
                    <svg>
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
              
            <div class="post__related">
            <?php
              $tags = wp_get_post_tags($post->ID);
              if ($tags) {    
              $first_tag = $tags[0]->term_id;
              $args=array(               
              'post__not_in' => array($post->ID),
              'posts_per_page'=>3,
              'caller_get_posts'=>1
              );
              $my_query = new WP_Query($args);
              if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <div class="post__related-item">
                <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('relatedPosts');   ?>
                  <h6><?php the_title(); ?></h6>
                </a>
                <span><?php the_time('d/M/Y') ?></span>
              </div>
              <?php
              endwhile;
              }
              wp_reset_query();
              }
              ?>
            </div>
            
            <div class="post__comments">               
            	<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
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