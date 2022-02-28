  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('pages.profile') }}" class="brand-link">
      <img src="https://gksbs.org/wp-content/uploads/2020/12/Gereja-Mandiri-dan-Terbuka-e1606821787608.png" alt="GKSBS Logo" class="brand-image img-circle elevation-3" style="width:35px; height:35px;">
      <span class="brand-text text-light font-weight-light">GKSBS BENGKULU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-header">Info</li> -->
          <li class="nav-item">
            <a href="{{ route('pages.berita') }}" class="nav-link {{ Route::is('pages.berita') ? 'active':''  }}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pages.dashboard') }}" class="nav-link {{ Route::is('pages.dashboard') ? 'active':''  }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pages.profile') }}" class="nav-link {{ Route::is('pages.profile') ? 'active':''  }}">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-header">Kegiatan & Fasilitas</li>
          <li class="nav-item">
            <a href="{{ route('pages.agenda') }}" class="nav-link {{ Route::is('pages.agenda') ? 'active':''  }}">
              <i class="nav-icon far fa-calendar"></i>
              <p>
                Agenda Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pages.fasilitas') }}" class="nav-link {{ Route::is('pages.fasilitas') ? 'active':''  }}">
              <i class="nav-icon fas fa-cookie-bite"></i>
              <p>
                Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-header">Info Detail Jemaat</li>
          <li class="nav-item">
            <a href="{{ route('pages.datatablejemaat') }}" class="nav-link {{ Route::is('pages.datatablejemaat') ? 'active':''  }}">
              <i class="nav-icon fas fa-people-arrows"></i>
              <p>
                Datatable Jemaat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <!-- <i class="fa-solid fa-gears"></i> -->
              <p>
                Kepengurusan Gereja
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('jemaat.majelis') }}" class="nav-link {{ Route::is('jemaat.majelis') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Majelis Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jemaat.komisianak') }}" class="nav-link {{ Route::is('jemaat.komisianak') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komisi Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jemaat.komisipemuda') }}" class="nav-link {{ Route::is('jemaat.komisipemuda') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komisi Pemuda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jemaat.komisiwanita') }}" class="nav-link {{ Route::is('jemaat.komisiwanita') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komisi Wanita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jemaat.komisipembangunan') }}" class="nav-link {{ Route::is('jemaat.komisipembangunan') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komisi Pembangunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jemaat.komisikehartaan') }}" class="nav-link {{ Route::is('jemaat.komisikehartaan') ? 'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komisi Kehartaan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active':''  }}">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          
          <br><br>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>