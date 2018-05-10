<footer class="footer">
      <div class="container  footer__top">
        <div class="col-sm-5  col-md-5">
          <div class="footer__top-about">
            <h4><?php bloginfo('name'); ?></h4>   
            <p>Desenvolvedor Web</p>          
          </div>
        </div>  
        <div class="col-sm-3  col-md-3">
          <h4>Categorias</h4>
          <nav class="footer__nav">
            <ul class="footer__nav-items">
              <?php  
                  $categories = get_categories(array('orderby' => 'name', 'number' => 3));          
                  foreach ( $categories as $category ) {
                    echo'<li class="footer__nav-item">';
                    echo '<a href="' . get_category_link( $category->term_id ) . '" title="'.$category->name.'">' .  $category->name . '</a>';
                    echo'</li>';
                }             
              ?> 
            </ul>
          </nav>
        </div>   
        <div class="col-sm-4  col-md-4">
          <h4>Posts Recentes</h4>
          <?php
            $args = array( 'numberposts' => '2' );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){             
              ?>
              <div class="footer__recent-post">
                <div class="footer__recent-post-info">
                  <div class="footer__recent-post-content">
                    <a href="<?php echo $recent["guid"]; ?>"><?php echo $recent["post_title"]; ?></a>
                  </div>
                  <div class="footer__recent-post-date">
                    <span><?php echo strftime("%d de %B de %Y", strtotime( $recent['post_date'] )); ?></span>
                  </div>
                </div>
              </div>
              <?php            
              }
              wp_reset_query();
          ?>
        </div>      
      </div>
      <div class="container  footer__bottom">
        <div class="col-sm-8  col-md-8  footer__bottom-copyright">
          <p>2018 © Marcelo Sousa. Todos os direitos reservados.</p>
        </div>
        <div class="col-sm-4  col-md-4  footer__bottom-social">
          <a href="https://www.facebook.com/mns.marcelo" target="_blank">
          	<img src="<?php bloginfo('template_url'); ?>/assets/facebook_footer.svg" width="16" alt="">            
          </a>
          <a href="https://www.linkedin.com/in/mnsmarcelo/" target="_blank">
             <img src="<?php bloginfo('template_url'); ?>/assets/linkedin_footer.svg" width="16" alt="">
          </a>
          <a href="https://www.instagram.com/mnsmarcelo/" target="_blank">
           <img src="<?php bloginfo('template_url'); ?>/assets/intstagram_footer.svg" width="16" alt="">                  
          </a>
        </div>
      </div>
    </footer>
    <div class="search-popup">
      <svg class="search-popup__close">
        <use xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use>
      </svg>
      <div class="search-popup__container  container">
      <form action="" method="get" accept-charset="utf-8" id="searchform" role="search">
          <input size="32" name="s" placeholder="Pesquise" type="text">
        </form>
      </div>
	</div>
    <div class="content-overlay"></div>
    <script src="<?php bloginfo('template_url'); ?>/assets/jquery-3.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/script.js"></script>
	<?php wp_footer(); ?>
  
</body></html>