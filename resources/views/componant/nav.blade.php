<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="nav-top flex-grow-1">
      <div class="container d-flex flex-row h-100">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="index.html">
           <h1 style="color: white;margin-top: 12px;">Smart Debt Collect
            </h1>
        </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <h1 style="color: white;margin-top: 12px;">Smart Debt Collect
            </h1>
        </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <form class="search-field" action="#">
            <div class="form-group mb-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="search">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-magnifier"></i></span>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-nav-right mr-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="icon-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                  </p>
                  <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-success">
                      <i class="icon-exclamation mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0">
                      Just now
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-warning">
                      <i class="icon-bubble mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0">
                      Private message
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-info">
                      <i class="icon-user-following mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-equalizer"></i>
              </a>
            </li>


            <li class="nav-item nav-profile dropdown">
              <a class="nav-link  dropdown-toggle"  id="notificationDropdownProfile" href="#" data-toggle="dropdown">
                <span class="nav-profile-text">Hello {{ Auth::user()->name }}</span>
                <img src="{{url('images/faces/face1.jpg')}}" class="rounded-circle" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdownProfile">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">{{ (Auth::user()->role==1) ?'Admin' :'User'  }} Settings
                  </p>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item"  href="#">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-success">
                      <i class="icon-user-following mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Profile</h6>

                  </div>
                </a>
                <div class="dropdown-divider"></div>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-info">
                      <i class="icon-logout mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Logout</h6>

                  </div>
                </a>
              </div>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

          </ul>
          <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu text-white"></span>
          </button>
        </div>
      </div>
    </div>




    <div class="nav-bottom">
      <div class="container">
        <ul class="nav page-navigation">
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link"><i class="link-icon icon-home"></i><span class="menu-title">Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('bucket.index')}}" class="nav-link"><i class="link-icon icon-badge"></i><span class="menu-title">MY BUCKET</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('reminder.index')}}" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Reminder</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('indexview.index')}}" class="nav-link"><i class="link-icon icon-envelope-open"></i><span class="menu-title">Inbox</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('ptp.index')}}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">PTP</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('rtp.index')}}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">RTP</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('rpc.index')}}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">RPC</span></a>
          </li>
         
           <li class="nav-item">
            <a href="{{route('billingqueries.index')}}" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">BILLING QUERIES</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Electricity Bills</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Water Bills</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Waste Collections</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Other</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{route('aod.index')}}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">AOD</span></a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">EXCLUSSIONS</span> </a>

          </li>
          @if (Auth::user()->role==1)
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-user"></i><span class="menu-title">USER</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-user-following"></i><span class="menu-title">ASSIGN USER</span></a>
          </li>
          <li class="nav-item">
            <a href="{{ url('clients') }}" class="nav-link"><i class="link-icon icon-people"></i><span class="menu-title">Clients</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('debtors.index')}}" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">Debtors</span></a>
          </li>

          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-envelope-letter"></i><span class="menu-title">Email Template</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-speech"></i><span class="menu-title">Reports</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-credit-card"></i><span class="menu-title">Open Account</span></a>
          </li>

          @endif

        </ul>
      </div>
    </div>
  </nav>
