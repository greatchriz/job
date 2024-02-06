<nav class="nav main-menu">
    <ul class="navigation" id="navbar">

          <x-main-pages.nav-link
              :current="request()->routeIs('home')"
              href="{{ route('home') }}"
              title="Home"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('about-us')"
              href="{{ route('about-us') }}"
              title="About Us"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('job-listing')"
              href="{{ route('job-listing') }}"
              title="Jobs"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('services')"
              href="{{ route('services') }}"
              title="Services"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('terms')"
              href="{{ route('terms') }}"
              title="Terms & Conditions"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('privacy-policy')"
              href="{{ route('privacy-policy') }}"
              title="Privacy Policy"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('blog')"
              href="{{ route('blog') }}"
              title="Blog"
          />

          <x-main-pages.nav-link
              :current="request()->routeIs('contact-us')"
              href="{{ route('contact-us') }}"
              title="Contact Us"
          />

      <!-- Only for Mobile View -->
      <li class="mm-add-listing">
          <!--check if a user is authenticated-->
          @auth
          @if(auth()->user()->hasRole('admin'))
          <a
              href="{{ route('admin.dashboard') }}"
              class="theme-btn btn-style-one"
          >Admin Dashboard</a>
          @else
          <a
              href="{{ route('dashboard') }}"
              class="theme-btn btn-style-one"
          >Dashboard</a>
          @endif
          @else
          <a
              href="{{ route('login') }}"
              class="theme-btn btn-style-one"
              style="margin-bottom: 10px"
          >Login</a>

          <a
              href="{{ route('register') }}"
              class="theme-btn btn-style-one"
          >Register</a>

          @endauth



          <span>
            <span class="contact-info">

                <span class="address">2001,Strawinskylaan Amsterdam, <br>North Holland, Netherlands.
                </span>
                <a
                    href="mailto:support@help-now.net"
                    class="email"
                >support@help-now.net</a>
            </span>

          </span>
      </li>
    </ul>
  </nav>
