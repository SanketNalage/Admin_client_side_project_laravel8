<!DOCTYPE html>
<html>
<head>



@include('admins.header');

@include('admins.leftmenu');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              @php
                  $data = Illuminate\Support\Facades\DB::select('SELECT * FROM clients');
              @endphp
                  <h3>{{count($data)}}</h3>
              <p>Clients</p>
            </div>
            <div class="icon">
              <i class="nav-icon fab fa-intercom"></i>
            </div>
            <a href="view_client" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              @php
                  $pro = Illuminate\Support\Facades\DB::select('SELECT * FROM products');
              @endphp
                  <h3>{{count($pro)}}</h3>
              <p>Product</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa fa-fw fa-table"></i>
            </div>
            <a href="view_pro" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              @php
                  $prot = Illuminate\Support\Facades\DB::select('SELECT * FROM portfolios');
              @endphp
                  <h3>{{count($prot)}}</h3>
              <p>Protfolio</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-th"></i>
            </div>
            <a href="view_prot" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              @php
              $blog = Illuminate\Support\Facades\DB::select('SELECT * FROM blogs');
          @endphp
              <h3>{{count($blog)}}</h3>
          <p>Blog</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-blog"></i>
            </div>
            <a href="view_blog" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        
      </div>
  

  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          @php
              $inquiry = Illuminate\Support\Facades\DB::select('SELECT * FROM inquiries');
          @endphp
              <h3>{{count($inquiry)}}</h3>
          <p>Inquiry</p>
        </div>
        <div class="icon">
          <i class="nav-icon fas fa-indent"></i>
        </div>
        <a href="view_inquiry" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->
@include('admins.footer');
</body>
</html>
