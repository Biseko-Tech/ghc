<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/ghc_logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">GHC Limited</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.users') }}" class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Users Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.customers') }}" class="nav-link {{ request()->is('admin/customers') ? 'active' : '' }}">
              <i class="nav-icon far fa-address-card"></i>
              <p>
                Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/incomes') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-check"></i>
              <p>
                Incomes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/expenses') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Expenses
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/transfers') ? 'active' : '' }}">
              <i class="nav-icon fas fa-exchange-alt"></i>
              <p>
                Transfers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/invoices') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Invoices
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/reports') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/logout') ? 'active' : '' }}">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>