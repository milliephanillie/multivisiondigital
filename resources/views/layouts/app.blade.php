
<div class="layout">


<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif



@include('sections.footer')


<div class="off-canvas">
  <div class="mobile-menu-wrapper">
    <div class="mobile-menu-inner">
      <div class="mobile-menu-header">
        <div class="mobile-menu-hamburger">
          <input class="checkbox" type="checkbox" name="" id="" />
          <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div>
        </div>
      </div>
      <div class="mobile-menu">
        @if (has_nav_menu('primary_navigation'))
          <div class="primary-menu-wrapper">
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-nav',
              'echo' => false]) !!}
            </nav>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

</div>
