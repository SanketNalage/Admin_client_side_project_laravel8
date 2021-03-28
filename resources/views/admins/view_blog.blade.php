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
            <h1 class="m-0 text-dark">View Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Blog</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div style="text-align: right;">
          <a href="insert_blog"><button class="btn btn-info btn-lg">Insert Blog</button></a>
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
        <th>Blog No.</th>
        <th>Blog Name</th>
        <th>Blog Image</th>
        <th>Blog Description</th>
        <th>Blog Status</th>
        <th colspan="2" style="text-align: center">Action</th>
        </tr>

        @foreach ($row as $item)
        <tr>
           <td>{{$item->blog_id }}</td>
            <td>{{$item->blog_name}}</td>
            <td style="text-align: center;"><img src="{{ asset('uploads/blog/'.$item->blog_img) }}" alt="image not found" width="50px"></td>
            <td>@php echo htmlspecialchars_decode($item->blog_description); @endphp</td>
            <td>{{$item->blog_status}}</td>
            <td><a href="delete_blog?id={{$item->blog_id}}"><i class="fas fa-trash-alt"></i></a></td>
            <td><a style="margin-left: 10px;" href="edit_blog?id={{$item->blog_id}}"><i class="fas fa-edit"></i></a></td>
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

