      <header class="large-screens">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse justify-content-between">
              <a class="navbar-brand" href={{ url('/') }}>
                <img class="logo" alt="logo" src="assets/media/logo.png" />
              </a>

              <ul class="navbar-nav mainmenu">
                <li class="menu-item has-children">
                  <a href={{ url('/') }} class="main-menu-item">Home</a>
                </li>
                <li class="menu-item has-children">
                  <a href="javascript:void(0);" class="main-menu-item"
                    >about<i class="fas fa-caret-down m-1"></i
                  ></a>
                  <ul class="submenu">
                    <li><a href={{url('team')}}>Our Team </a></li>
                    <li><a href={{url('about')}}>About us </a></li>
                  </ul>
                </li>
                <li class="menu-item has-children">
                  <a href="javascript:void(0);" class="main-menu-item"
                    >Facities<i class="fas fa-caret-down m-1"></i
                  ></a>
                  <ul class="submenu">
                    <li><a href={{url('activities')}}>Activities </a></li>
                    <li><a href={{url('arcadegames')}}>Arcade games </a></li>
                    <li><a href={{url('equipment')}}>Equipment</a></li>
                    <li><a href={{ url('viprooms') }}>VIP Room </a></li>
                  </ul>
                </li>
                <li class="menu-item has-children">
                  <a href={{url('menu')}} class="main-menu-item">Menu </a>
                </li>
                <li class="menu-item has-children">
                  <a href={{url('contact')}} class="main-menu-item">Contact Us </a>
                </li>
              </ul>
              <ul class="navbar-nav mainmenu custom">
                <li class="menu-item has-children">
                  <a href="tel:+962771999994" class="main-menu-item">BOOK NOW</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <header class="small-screen">
        <div class="container" id="small-screen-container">
          <div class="mobile-menu">
            <div>
              <a class="navbar-brand" href={{ url('/') }}
                ><img alt="" src="./assets/media/logo.png"
              /></a>
            </div>
            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
          <div class="blur-overlay"></div>
          <nav class="mobile-navar d-xl-none">
            <ul>
              <li class="has-children"><a href={{ url('/') }}>Home</a></li>
              <li class="has-children">
                about <span class="icon-arrow"></span>
                <ul class="children">
                  <li><a href={{url('team')}}>Our Team </a></li>
                  <li><a href={{url('about')}}>About us </a></li>
                </ul>
              </li>
              <li class="has-children">
                Facities<span class="icon-arrow"></span>
                <ul class="children">
                  <li><a href={{url('activities')}}>Activities </a></li>
                  <li><a href={{url('arcadegames')}}>Arcade games </a></li>
                  <li><a href={{url('equipment')}}>Equipment </a></li>
                  <li><a href={{ url('viprooms') }}>VIP Room </a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href={{url('menu')}}>Menu </a>
              </li>
              <li class="has-children">
                <a href={{url('contact')}}>Contact Us</a>
              </li>
              <li class="has-children">
                <a href="tel:+962771999994">BOOK NOW </a>
              </li>
            </ul>
          </nav>
        </div>
      </header>