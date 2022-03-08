{{--<div class="utility">--}}
{{--<ul>--}}
{{--<li>Facebook</li>--}}
{{--<li>Twitter</li>--}}
{{--<li>Instagram</li>--}}
{{--<li>206-605-8551</li>--}}
{{--</ul>--}}
{{--</div>--}}

<header class="header-banner">
    <div class="container">
        <div class="header-inner">
            <a class="brand" href="{{ home_url('/') }}">
                <img width="250" src="@asset('images/multivision-digital-video-production-logo-trans.png')" alt="Multivision
    Digital
    Production Logo"/>
            </a>

            @if (has_nav_menu('primary_navigation'))
                <div class="primary-menu-wrapper">
                    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'desktop-nav',
                        'echo'
                         => false]) !!}
                    </nav>
                </div>
            @endif
        </div>
    </div>
</header>
