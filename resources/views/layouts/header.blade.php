  <!-- Header -->
  <header class="header">
      <div class="container">
          <nav class="navbar">
              <a href="{{route('home')}}" class="brand"><img src="{{ asset('assets/logo.png') }}" alt="Dhronix Logo"
                      class="brand-logo"></a>
              <ul class="nav-links">
                  <li><a href="{{route('home')}}" class="active"><i class="fas fa-home"
                              style="margin-right:8px; color:var(--secondary-color)"></i>Home</a></li>
                  <li><a href="{{route('about')}}"><i class="fas fa-users"
                              style="margin-right:8px; color:var(--secondary-color)"></i>About Us</a></li>
                  <li class="nav-item dropdown">
                      <a href="{{route('services')}}"><i class="fas fa-layer-group"
                              style="margin-right:8px; color:var(--secondary-color)"></i>Services <i
                              class="fas fa-chevron-down" style="font-size:10px; margin-left:5px;"></i></a>
                      <!-- Mega Menu Dropdown -->
                      <div class="dropdown-menu">
                          <a href="{{route('nidhi-software')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-laptop-code"></i></div>
                              <div class="dropdown-text">
                                  <h4>Nidhi Software</h4>
                                  <p>Secure Nidhi management</p>
                              </div>
                          </a>
                          <a href="{{route('nbfc-software')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-university"></i></div>
                              <div class="dropdown-text">
                                  <h4>NBFC Software</h4>
                                  <p>Loan & EMI tracking</p>
                              </div>
                          </a>
                          <a href="{{route('erp-accounting')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                              <div class="dropdown-text">
                                  <h4>ERP Accounting</h4>
                                  <p>Complete ERP modules</p>
                              </div>
                          </a>
                          <a href="{{route('ecommerce')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-shopping-cart"></i></div>
                              <div class="dropdown-text">
                                  <h4>eCommerce</h4>
                                  <p>Welcome to our eCommerce platform</p>
                              </div>
                          </a>
                          <a href="{{route('mobile-apps')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-mobile-alt"></i></div>
                              <div class="dropdown-text">
                                  <h4>Mobile Apps</h4>
                                  <p>iOS & Android native</p>
                              </div>
                          </a>
                          <a href="{{route('cloud-hosting')}}" class="dropdown-item">
                              <div class="dropdown-icon"><i class="fas fa-cloud"></i></div>
                              <div class="dropdown-text">
                                  <h4>Cloud Hosting</h4>
                                  <p>Secure server hosting</p>
                              </div>
                          </a>
                      </div>
                  </li>
                  <li><a href="{{ route('contact') }}"><i class="fas fa-handshake"
                              style="margin-right:8px; color:var(--secondary-color)"></i>Contact Us</a></li>
                  <li><a href="{{ route('portfolio') }}"><i class="fas fa-trophy"
                              style="margin-right:8px; color:var(--secondary-color)"></i>Portfolio</a></li>
              </ul>
              <div class="nav-right">
                  <a href="contact.html" class="btn btn-primary-solid">
                      <i class="fas fa-user-circle" style="margin-right:8px;"></i>Sign in</a>
              </div>
              <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                  <i class="fas fa-bars"></i>
              </button>
          </nav>
      </div>
  </header>