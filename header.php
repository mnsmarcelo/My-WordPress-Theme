<?php 
//  https://static1.marcelosousa.me/blog
// http://localhost/novo_blog/wp-content/themes/my-blog-wordpress-theme
define("STATIC_BLOG_DNS", "http://localhost/novo_blog/wp-content/themes/my-blog-wordpress-theme");
define("STATIC_DNS", "https://static.marcelosousa.me"); 
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php wp_title(''); ?></title>
   <link rel="shortcut icon" href="<?php echo STATIC_DNS; ?>/assets/img/logo/favicon.png">
	<link rel="apple-touch-icon" sizes="48x48" href="<?php echo STATIC_DNS; ?>/assets/img/logo/app-icon-48x48.png">
	<link rel="apple-touch-icon" sizes="96x96" href="<?php echo STATIC_DNS; ?>/assets/img/logo/app-icon-96x96.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo STATIC_DNS; ?>/assets/img/logo/app-icon-144x144.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="<?php echo STATIC_BLOG_DNS; ?>/assets/bootstrap.css" rel="stylesheet" > 
  <link href="<?php echo STATIC_BLOG_DNS; ?>/assets/style.css" rel="stylesheet">   
	  
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112674378-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112674378-1');
    </script>

	<?php wp_head(); ?>
	<meta property="og:site_name" content="Marcelo Sousa" />       
	<meta property="og:image" content="<?php echo STATIC_DNS; ?>/assets/img/bg/marcelo-sousa-webdeveloper.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="627" />
	<meta property="fb:app_id" content="144413789578797" />
  </head>
  <body>
    <svg style="display: none;">
      <symbol viewBox="0 0 512 512" id="icon-search">
        <path d="M448.3,424.7L335,311.3c20.8-26,33.3-59.1,33.3-95.1c0-84.1-68.1-152.2-152-152.2c-84,0-152,68.2-152,152.2
	s68.1,152.2,152,152.2c36.2,0,69.4-12.7,95.5-33.8L425,448L448.3,424.7z M120.1,312.6c-25.7-25.7-39.8-59.9-39.8-96.3
	s14.2-70.6,39.8-96.3S180,80,216.3,80c36.3,0,70.5,14.2,96.2,39.9s39.8,59.9,39.8,96.3s-14.2,70.6-39.8,96.3
	c-25.7,25.7-59.9,39.9-96.2,39.9C180,352.5,145.8,338.3,120.1,312.6z"></path>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-close">
        <polygon class="st0" points="340.2,160 255.8,244.3 171.8,160.4 160,172.2 244,256 160,339.9 171.8,351.6 255.8,267.8 340.2,352 
	352,340.3 267.6,256 352,171.8 "></polygon>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-facebook">
        <path d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64
	H288z"></path>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-twitter">
        <path d="M492,109.5c-17.4,7.7-36,12.9-55.6,15.3c20-12,35.4-31,42.6-53.6c-18.7,11.1-39.4,19.2-61.5,23.5
	C399.8,75.8,374.6,64,346.8,64c-53.5,0-96.8,43.4-96.8,96.9c0,7.6,0.8,15,2.5,22.1c-80.5-4-151.9-42.6-199.6-101.3
	c-8.3,14.3-13.1,31-13.1,48.7c0,33.6,17.2,63.3,43.2,80.7C67,210.7,52,206.3,39,199c0,0.4,0,0.8,0,1.2c0,47,33.4,86.1,77.7,95
	c-8.1,2.2-16.7,3.4-25.5,3.4c-6.2,0-12.3-0.6-18.2-1.8c12.3,38.5,48.1,66.5,90.5,67.3c-33.1,26-74.9,41.5-120.3,41.5
	c-7.8,0-15.5-0.5-23.1-1.4C62.8,432,113.7,448,168.3,448C346.6,448,444,300.3,444,172.2c0-4.2-0.1-8.4-0.3-12.5
	C462.6,146,479,129,492,109.5z"></path>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-google">
        <path d="M242.1,275.6l-18.2-13.7l-0.1-0.1c-5.8-4.6-10-8.3-10-14.7c0-7,5-11.8,10.9-17.4l0.5-0.4c20-15.2,44.7-34.3,44.7-74.6
		c0-26.9-11.9-44.7-23.3-57.7h13L320,64H186.5c-25.3,0-62.7,3.2-94.6,28.6l-0.1,0.3C70,110.9,57,137.4,57,163.5
		c0,21.2,8.7,42.2,23.9,57.4c21.4,21.6,48.3,26.1,67.1,26.1c1.5,0,3,0,4.5-0.1c-0.8,3-1.2,6.3-1.2,10.3c0,10.9,3.6,19.3,8.1,26.2
		c-24,1.9-58.1,6.5-84.9,22.3C35.1,328.4,32,361.7,32,371.3c0,38.2,35.7,76.8,115.5,76.8c91.6,0,139.5-49.8,139.5-99
		C287,312,264.2,293.5,242.1,275.6z M116.7,139.9c0-13.4,3-23.5,9.3-30.9c6.5-7.9,18.2-13.1,29-13.1c19.9,0,32.9,15,40.4,27.6
		c9.2,15.5,14.9,36.1,14.9,53.6c0,4.9,0,20-10.2,29.8c-7,6.7-18.7,11.4-28.6,11.4c-20.5,0-33.5-14.7-40.7-27
		C120.4,173.5,116.7,153.1,116.7,139.9z M237.8,368c0,27.4-25.2,44.5-65.8,44.5c-48.1,0-80.3-20.6-80.3-51.3
		c0-26.1,21.5-36.8,37.8-42.5c18.9-6.1,44.3-7.3,50.1-7.3c3.9,0,6.1,0,8.7,0.2C224.9,336.8,237.8,347.7,237.8,368z"></path>
	    <polygon points="402,142 402,64 368,64 368,142 288,142 288,176 368,176 368,257 402,257 402,176 480,176 480,142 	"></polygon>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-pinterest">
        <path d="M256,32C132.3,32,32,132.3,32,256c0,91.7,55.2,170.5,134.1,205.2c-0.6-15.6-0.1-34.4,3.9-51.4
		c4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58c20.4,0,30.2,15.3,30.2,33.6
		c0,20.5-13.1,51.1-19.8,79.5c-5.6,23.8,11.9,43.1,35.4,43.1c42.4,0,71-54.5,71-119.1c0-49.1-33.1-85.8-93.2-85.8
		c-67.9,0-110.3,50.7-110.3,107.3c0,19.5,5.8,33.3,14.8,43.9c4.1,4.9,4.7,6.9,3.2,12.5c-1.1,4.1-3.5,14-4.6,18
		c-1.5,5.7-6.1,7.7-11.2,5.6c-31.3-12.8-45.9-47-45.9-85.6c0-63.6,53.7-139.9,160.1-139.9c85.5,0,141.8,61.9,141.8,128.3
		c0,87.9-48.9,153.5-120.9,153.5c-24.2,0-46.9-13.1-54.7-27.9c0,0-13,51.6-15.8,61.6c-4.7,17.3-14,34.5-22.5,48
		c20.1,5.9,41.4,9.2,63.5,9.2c123.7,0,224-100.3,224-224C480,132.3,379.7,32,256,32z"></path>
      </symbol>
      <symbol viewBox="0 0 512 512" id="icon-instagram">
        <path fill="#231F20" d="M448.5,112c0-26.233-21.267-47.5-47.5-47.5H112c-26.233,0-47.5,21.267-47.5,47.5v289
	c0,26.233,21.267,47.5,47.5,47.5h289c26.233,0,47.5-21.267,47.5-47.5V112z M257,175.833c44.182,0,80,35.816,80,80s-35.818,80-80,80
	s-80-35.816-80-80S212.818,175.833,257,175.833z M416.5,160.5c0,8.836-7.163,16-16,16h-48c-8.837,0-16-7.164-16-16v-48
	c0-8.836,7.163-16,16-16h48c8.837,0,16,7.164,16,16V160.5z M401.5,416.5h-288c-8.822,0-17-8.178-17-17v-175h53.072
	c-3.008,10-4.572,20.647-4.572,31.583C145,286,156.65,314,177.805,335.154s49.279,32.741,79.195,32.741s58.041-11.681,79.195-32.835
	S369,286.016,369,256.099c0-10.936-1.563-21.599-4.572-31.599H416.5v175C416.5,408.322,410.322,416.5,401.5,416.5z"></path>
      </symbol>
      
      <symbol viewBox="0 0 512 512" id="icon-linkedin">
	<path fill="#464646" d="M6.232 11.161v17.696h-5.893v-17.696h5.893zM6.607 5.696q0.018 1.304-0.902 2.179t-2.42 0.875h-0.036q-1.464 0-2.357-0.875t-0.893-2.179q0-1.321 0.92-2.188t2.402-0.866 2.375 0.866 0.911 2.188zM27.429 18.714v10.143h-5.875v-9.464q0-1.875-0.723-2.938t-2.259-1.063q-1.125 0-1.884 0.616t-1.134 1.527q-0.196 0.536-0.196 1.446v9.875h-5.875q0.036-7.125 0.036-11.554t-0.018-5.286l-0.018-0.857h5.875v2.571h-0.036q0.357-0.571 0.732-1t1.009-0.929 1.554-0.777 2.045-0.277q3.054 0 4.911 2.027t1.857 5.938z"></path>
</symbol>
      <symbol viewBox="0 0 512 512" id="icon-toggle">
        <g>
          <rect x="96" y="241" width="320" height="32"></rect>
          <rect x="96" y="145" width="320" height="32"></rect>
          <rect x="96" y="337" width="320" height="32"></rect>
        </g>
      </symbol>
    </svg>
    <header class="header">
    <nav class="nav navbar-fixed-top">
    <div class="nav__container  container">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="<?php bloginfo('url'); ?>" title="Marcelo Sousa">Home</a>
        </li>
        <li class="nav__item">
          <a href="#menu-categorias" title="Categorias">Categorias</a>
          <ul class="nav__list-submenu">         
            <?php  
                $categories = get_categories(array('orderby' => 'name'));          
                foreach ( $categories as $category ) {
                  echo'<li class="nav__item-submenu">';
                  echo '<a href="' . get_category_link( $category->term_id ) . '" title="'.$category->name.'">' .  $category->name . '</a>';
                  echo'</li>';
               }             
            ?> 
          </ul>
        </li>  
      </ul>
      <div class="nav__search  search">
        Busca <i class="fa fa-search"></i>
      </div>
    </div>
  </nav>
      <div class="col-md-12  nav-toggle">
        <svg class="nav-toggle__icon">
          <use xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-toggle"></use>
        </svg>
      </div>
      <div class="col-md-12  header__logo">
        <div class="logo">
          <h1><a class="logo__link" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
          <div class="logo__description"><?php bloginfo('description'); ?></div>
        </div>
      </div>
    </header>