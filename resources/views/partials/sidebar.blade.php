 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">Dedek</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">Dashboard</li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li> 
          <li class="nav-header">Hero</li>
          <li class="nav-item">
            <a href="{{ route('hero.index') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-mask"></i>
                <p>Hero</p>
            </a>
          </li> 
          <li class="nav-header">About</li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link">
              <i class="nav-icon fas fa-regular fa-address-card"></i>
                <p>About</p>
            </a>
          </li> 
          <li class="nav-header">Showcase</li>
          <li class="nav-item">
            <a href="{{ route('showcase.index') }}" class="nav-link">
               <i class="nav-icon fas fa-solid fa-lightbulb"></i>
                <p>Showcase</p>
            </a>
          </li> 
          <li class="nav-header">Skills & Tools</li>
          <li class="nav-item">
            <a href="{{ route('skills.index') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-bolt"></i>
                <p>Skills & Tools</p>
            </a>
          </li> 
          <li class="nav-header">Sosial Media</li>
          <li class="nav-item">
            <a href="{{ route('sosmed.index') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-hashtag"></i>
                <p>Sosial Media</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->