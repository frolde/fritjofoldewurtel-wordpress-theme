<header class="banner navigationMainHeader">
  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-md" id="navigation-header">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="<?php echo get_template_directory_uri() . '/../dist/images/fo-logo-sw.svg' ?>" alt="{{ get_bloginfo('name', 'display') }}">
      </a>

      <!-- Caller -->
      <a class="navbar-caller d-block d-md-none" href="tel:+4917643844792">
        <i class="fas fa-phone"></i>
      </a>

      <!-- Links -->
      <div class="collapse navbar-collapse justify-content-end" id="nav-content">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
        @endif
      </div>

    </nav>
  </div>
</header>
