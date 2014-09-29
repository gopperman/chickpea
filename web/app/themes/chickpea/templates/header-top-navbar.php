<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-brand-header">
      <h1><a class="navbar-brand" href="<?php echo home_url(); ?>/">Chickpea</a> <small>Vegan Cafe<br />Worcester</small></h1>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
			<a class="toggle-menu"><i class="fa fa-bars"></i></a>
			<div id="toggle-wrap">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
			</div>
    </nav>
  </div>
</header>
