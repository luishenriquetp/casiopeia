<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
 <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
  <div class="collapse navbar-collapse menu-collapse">
    <?php
    if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
    endif;
    ?>
    <!-- <button type="button" class="btn btn-default navbar-btn pull-right"><i class="ion-log-out"></i> Logout</button> -->
    <!-- <ul class="nav navbar-nav pull-right">
      <li><a href="https://www.facebook.com/CasioGshockBrasil" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/casio_usa" target="_blank"><i class="fa fa-twitter"></i></a></li>
    </ul>  -->
  </div>
 </div>
</nav>
