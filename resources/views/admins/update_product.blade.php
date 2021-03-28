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
            <h1 class="m-0 text-dark">Update Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Product</li>
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
                <h3 class="card-title">Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm"  action="update_prod" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Title</label>
                    <input type="hidden" name="product_id" value="{{$row->product_id }}">
                    <input type="text" name="product_name" value="{{$row->product_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Service title">
                  </div>

          @error('product_name')
          <span class="text-danger">{{ $message }}</span>
      @enderror

                  <div class="form-group">
                    <label for="exampleInputFile">Select Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="{{$row->product_img}}" class="form-control" id="exampleInputFile" name="product_img">
                        </div>
                    </div>
                    @error('product_img')
          <span class="text-danger">{{ $message }}</span>
      @enderror
                  </div>



    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <label for="exampleInputFile">Product Description</label>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea name="product_description"  class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$row->product_description}}</textarea>
              </div>
            </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

    <div class="form-group">
        <label>Product Status</label>
        <input type="text" name="product_status" value="{{$row->product_status}}" class="form-control" id="exampleInputEmail1">
      </div>
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
