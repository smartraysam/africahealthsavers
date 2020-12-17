  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="images/logo.png" alt="AHSI Logo" style="margin:auto; width:200px; height:100px">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item has-treeview menu-open">
                      <a href="/admin" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="/event" class="nav-link">
                          <i class="nav-icon fas fa-calendar" aria-hidden="true"></i>
                          <p>
                              Events & Causes

                          </p>
                      </a>

                  </li>
                  <li class="nav-item has-treeview">
                      <a href="/blog" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Blog News
                          </p>
                      </a>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              Portfolios
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="pages/gallery.html" class="nav-link">
                          <i class="nav-icon fas fa-dollar-sign    "></i>
                          <p>
                              Donations
                          </p>

                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/category" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Categories
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                          <p>
                              Volunteers
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              LogOut
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
