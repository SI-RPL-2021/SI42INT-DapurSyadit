<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">E-commerce</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="{{URL::to('/')}}/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
             
              <li class="menu-header">Menu Utama</li>
              
              <li ><a class="nav-link" href="{{URL::to('/')}}/product"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a class="nav-link" href="{{URL::to('/')}}/transaksi"><i class="far fa-file-alt"></i> <span>Transaksi</span></a></li>
            
              
              @can('isCustomer')
              <li ><a class="nav-link" href="{{URL::to('/')}}/trash"><i class="fa fa-trash"></i> <span>History</span></a></li>
              @endcan

              @can('isAdmin')
              <li ><a class="nav-link" href="{{URL::to('/')}}/"><i class="fa fa-users"></i> <span>Kelola Akun</span></a></li>
              <li><a class="nav-link" href="{{URL::to('/')}}/product"><i class="fa fa-table"></i> <span>Product</span></a></li>
              <li ><a class="nav-link" href="{{URL::to('/')}}/"><i class="fas fa-fw fa-chart-area"></i> <span>Grafik</span></a></li>
              <li ><a class="nav-link" href="{{URL::to('/')}}/log"><i class="fas fa-bolt"></i> <span>Log Aktivitas</span></a></li>
              <li ><a class="nav-link" href="{{URL::to('/')}}/trash"><i class="fa fa-trash"></i> <span>Trash</span></a></li>
              @endcan

              
              
        </aside>
      </div>