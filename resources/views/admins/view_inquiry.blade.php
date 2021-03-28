<!DOCTYPE html>
<html>
<head>

@include('admins.header');

<body>
  @include('admins.leftmenu');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Inquiry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Inquiry</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <div id="jsGrid1">

        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
        <thead><!-- thead Starts -->
        <tr style="background-color: rgb(98, 206, 248)">
        <th>Inquiry No.</th>
        <th>Inquiry Date</th>
        <th>Product Name</th>
        <th>Inquiry Name</th>
        <th>Inquiry Email</th>
        <th>Inquiry</th>
        <th>Action</th>
        </tr>

        @foreach ($row as $item)
        <tr>
           <td>{{$item->inquiry_id }}</td>
           <td>{{$item->created_at }}</td>
            <td>
              @php
                  $pro = Illuminate\Support\Facades\DB::select("select * from products where product_id='{$item->pro_id}'");
              @endphp
              @foreach ($pro as $it)
                  {{$it->product_name}}
              @endforeach
            </td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->inquiry}}</td>
            <td><a href="delete_inquiry?id={{$item->inquiry_id}}"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        @endforeach
        </thead><!-- thead Ends -->
        </table><!-- table table-bordered table-hover table-striped Ends -->

          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admins.footer');
</body>
</html>

