@extends('template.master')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Form Input Produk</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Form Input Produk</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Form Input Produk</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name"/>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Product Description</label>
                        <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      <input type="text" name="deskripsi_produk" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name"/>
                    </div>
                    <div class="form-group">
                      <label>Product Price</label>
                      <input type="text" name="deskripsi_produk" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name"/>
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control select2" name="kategori_id" style="width: 100%">
                        <option selected="selected">Select Category</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div> 
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
          
              </div>
            </div>
            <!-- /.card -->
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

@endsection
