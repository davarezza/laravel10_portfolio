    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
          <span class="h3 fw-bold d-block d-lg-none">DaFolioo</span>
          <img
            src="./assets/images/davaprof.jpeg"
            class="d-none d-lg-block rounded-circle"
            alt="Dava Rezza"
          />
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="home") ? 'active' : '' }}" href="{{ route('home') }}"
                >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="services") ? 'active' : '' }}" href="{{ route('services') }}"
                >Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="projects") ? 'active' : '' }}" href="{{ route('projects') }}"
                >Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="about") ? 'active' : '' }}" href="{{ route('about') }}"
                >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="reviews") ? 'active' : '' }}" href="{{ route('reviews') }}"
                >Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active ==="contact") ? 'active' : '' }}" href="{{ route('contact') }}"
                >Contact</a>
            </li>
            <hr>
            <p>© 2023 with ❤ by Darezz</p>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->