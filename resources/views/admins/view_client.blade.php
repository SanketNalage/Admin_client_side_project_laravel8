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
            <h1 class="m-0 text-dark">View Client</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Client</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div style="text-align: right;">
          <a href="insert_client"><button class="btn btn-info btn-lg">Insert Client</button></a>
        </div>
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
        <th>Client No.</th>
        <th>Client Name</th>
        <th>Client Image</th>
        <th>Client Description</th>
        <th>Client Status</th>
        <th colspan="2" style="text-align: center">Action</th>
        </tr>

        @foreach ($row as $item)
        <tr>
           <td>{{$item->client_id}}</td>
            <td>{{$item->client_name}}</td>
            <td style="text-align: center;"><img src="{{ asset('uploads/client/'.$item->client_img) }}" alt="image not found" width="50px"></td>
            <td>@php echo htmlspecialchars_decode($item->client_description); @endphp</td>
            <td>{{$item->client_status}}</td>
            <td><a href="delete_client?id={{$item->client_id}}"><i class="fas fa-trash-alt"></i></a></td>
            <td><a style="margin-left: 10px;" href="edit_client?id={{$item->client_id}}"><i class="fas fa-edit"></i></a></td>
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

