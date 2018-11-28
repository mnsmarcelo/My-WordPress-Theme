<div class="col-md-4  col-lg-3">
          <div class="sidebar-widget">
            <h3>About Me</h3>
            <div class="sidebar-widget__about-me">
              <div class="sidebar-widget__about-me-image">
                <img src="<?php bloginfo('template_url'); ?>/assets/face.jpg" title="Marcelo Sousa Web Developer" alt="About Me">
              </div>
              <p>Profissional apaixonado por desenvolvimento web, desenvolve soluções front end com com React, Redux, CSS, SASS, Bootstrap e no back end com Java e NodeJS.</p>
            </div>
          </div>
          <div class="sidebar-widget">
            <h3>Follow Me</h3>
            <div class="sidebar-widget__follow-me">
              <div class="sidebar-widget__follow-me-icons">
                <a href="https://www.facebook.com/mnsmarcelo" target="_blank">                 
                  <img src="<?php bloginfo('template_url'); ?>/assets/facebook_circle.svg" width="57" alt="">        
                </a>              
                <a href="https://www.linkedin.com/in/mnsmarcelo/" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/assets/linkedin_circle.svg" width="57" alt="">
                </a>
                <a href="https://www.instagram.com/mnsmarcelo/" target="_blank">
                 <img src="<?php bloginfo('template_url'); ?>/assets/instagram_circle.svg" width="57" alt="">                  
                </a>
              </div>
            </div>
          </div>  
          <!--<div class="sidebar-widget">
            <div class="sidebar-widget__banner">
            <a href="https://marcelosousa.me/?meta=banner#page7" title="Marcelo Sousa Web Developer"><img src="https://blog.marcelosousa.me/wp-content/uploads/2018/01/marcelo-web-developer-lateral.jpg" title="Marcelo Sousa Web Developer" alt="Banner"></a>
            </div>
          </div>-->
          <div class="sidebar-widget">
            <h3>Posts mais populares</h3>
            <div class="sidebar-widget__popular">
              <?php $popular = new WP_Query(array('posts_per_page'=>5, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
              while ($popular->have_posts()) : $popular->the_post(); ?>
              <div class="sidebar-widget__popular-item">
                  <div class="sidebar-widget__popular-item-image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mostPopular'); ?></a>
                  </div>
                  <div class="sidebar-widget__popular-item-info">
                    <div class="sidebar-widget__popular-item-content">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="sidebar-widget__popular-item-date">
                      <span><?php the_time('d/M/Y') ?></span>
                    </div>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>	   
          <!--<div class="sidebar-widget">
            <h3>Instagram</h3>
            <div class="sidebar-widget__instagram">  
<iframe src="https://snapwidget.com/embed/496279" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:260px; height:390px"></iframe>

            </div>
          </div> -->  
          <div class="sidebar-widget">
            <h3>Tag Cloud</h3>
            <div class="sidebar-widget__tag-cloud">
              <?php wp_tag_cloud( 'smallest=10&largest=25&number=40&orderby=count' ); ?>
            </div>
          </div>                   
        </div>
