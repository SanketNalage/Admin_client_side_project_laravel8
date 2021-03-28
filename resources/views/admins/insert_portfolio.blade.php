<!DOCTYPE html>
<html>
<head>

  @include('admins.header');

</head>

<body>
@include('admins.leftmenu');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Insert Portfolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Insert Portfolio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



        <!-- Main content -->
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm"  action="insert_port" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Portfolio Title</label>
                    <input type="text" name="portfolio_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Service title">
                  </div>

                    @error('portfolio_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                  <div class="form-group">
                    <label for="exampleInputFile">Select Portfolio Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="exampleInputFile" name="portfolio_img">
                        </div>
                    </div>
                    @error('portfolio_img')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>



    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <label for="exampleInputFile">Portfolio Description</label>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea name="portfolio_description" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </div>
        </div>
        <!-- /.col-->
      </div>
    @error('portfolio_description')
    <span class="text-danger">{{ $message }}</span>
    @enderror
      <!-- ./row -->
    </section>
                <!-- /.card-body -->
                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
            <!-- /.card -->
            </div>
        </div>
      </div>
    </section>
  </div>

@include('admins.footer');
</body>
</html>
