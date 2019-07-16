<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
      data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
      <i class="icon wb-more-horizontal" aria-hidden="true"></i>
    </button>
    <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
      <img class="navbar-brand-logo" src="{{asset('images/gi-full-icon-invert.png')}}" title="Remark">
      <span class="navbar-brand-text hidden-xs-down"> Remark</span>
    </div>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
      <span class="sr-only">Toggle Search</span>
      <i class="icon wb-search" aria-hidden="true"></i>
    </button>
  </div>

  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="nav-item hidden-float" id="toggleMenubar">
          <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
              <span class="sr-only">Toggle menubar</span>
              <span class="hamburger-bar"></span>
            </i>
          </a>
        </li>
      </ul>
      <!-- End Navbar Toolbar -->

      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" data-animation="scale-up" aria-expanded="false"
            role="button">
            <span class="flag-icon flag-icon-us"></span>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="#" role="menuitem">
              <span class="flag-icon flag-icon-gb"></span> English</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="{{asset('theme/global/portraits/5.jpg')}}" alt="...">
              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="{!! url('admin/profile')!!}" role="menuitem"><i class="icon wb-user"
                aria-hidden="true"></i>
              Profile</a>
            <a class="dropdown-item" href="#" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i>
              Billing</a>
            <a class="dropdown-item" href="#" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i>
              Settings</a>
            <div class="dropdown-divider" role="presentation"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" role="menuitem"><i class="icon wb-power"
                aria-hidden="true"></i> Logout</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" title="Notifications" aria-expanded="false"
            data-animation="scale-up" role="button">
            <i class="icon wb-bell" aria-hidden="true"></i>
            <span class="badge badge-pill badge-danger up">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <div class="dropdown-menu-header">
              <h5>NOTIFICATIONS</h5>
              <span class="badge badge-round badge-danger">New 5</span>
            </div>

            <div class="list-group">
              <div data-role="container">
                <div data-role="content">
                  <a class="list-group-item dropdown-item" href="#" role="menuitem">
                    <div class="media">
                      <div class="pr-10">
                        <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">A new order has been placed</h6>
                        <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dropdown-menu-footer">
              <a class="dropdown-menu-footer-btn" href="#" role="button">
                <i class="icon wb-settings" aria-hidden="true"></i>
              </a>
              <a class="dropdown-item" href="#" role="menuitem">
                All notifications
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" title="Messages" aria-expanded="false"
            data-animation="scale-up" role="button">
            <i class="icon wb-envelope" aria-hidden="true"></i>
            <span class="badge badge-pill badge-info up">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <div class="dropdown-menu-header" role="presentation">
              <h5>MESSAGES</h5>
              <span class="badge badge-round badge-info">New 3</span>
            </div>

            <div class="list-group" role="presentation">
              <div data-role="container">
                <div data-role="content">
                  <a class="list-group-item" href="#" role="menuitem">
                    <div class="media">
                      <div class="pr-10">
                        <span class="avatar avatar-sm avatar-online">
                          <img src="{{asset('theme/global/portraits/2.jpg')}}" alt="..." />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Mary Adams</h6>
                        <div class="media-meta">
                          <time datetime="2018-06-17T20:22:05+08:00">30 minutes ago</time>
                        </div>
                        <div class="media-detail">Anyways, i would like just do it</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dropdown-menu-footer" role="presentation">
              <a class="dropdown-menu-footer-btn" href="#" role="button">
                <i class="icon wb-settings" aria-hidden="true"></i>
              </a>
              <a class="dropdown-item" href="#" role="menuitem">
                See all messages
              </a>
            </div>
          </div>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->

    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>
</nav>