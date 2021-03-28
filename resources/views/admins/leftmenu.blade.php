
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('user/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><h3 style="font-family: 'Times New Roman';">Ajspire Tech</h3></span>
    </a>
{{-- hello wolrd --}}
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="admin_dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="view_serv" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Services</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="insert_service" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Services</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-fw fa-table"></i>
              <p>
                Product List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="view_pro" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Product</p>
              </a>
            </li> 
              <li class="nav-item">
                <a href="insert_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Product</p>
                </a>
              </li>
            </ul>
          </li>

          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Protfolio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="view_prot" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Protfolio</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="insert_portfolio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Protfolio</p>
                </a>
              </li>
            </ul>
          </li>
          
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="insert_blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Blog</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-intercom"></i>
              <p>
                Our Client 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_client" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="insert_client" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Client</p>
                </a>
              </li>
            </ul>
          </li>

          

           
         

            <li class="nav-item has-treeview">
            <a href="view_contactus" class="nav-link">
            <i class="nav-icon far fa-address-book"></i>
            <p>
            View Contact Us
            </p>
            </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="view_inquiry" class="nav-link">
              <i class="nav-icon fas fa-indent"></i>
              <p>
              View Inquiry
              </p>
              </a>
              </li>

          <li class="nav-item has-treeview">
            <a href="{{'/logout'}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
             </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
