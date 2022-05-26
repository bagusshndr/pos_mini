@extends('template.master')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Produk</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- /.card -->
                <div class="card">
                  <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Input Form
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Category Name</th>
                          <th>Product Description</th>
                          <th>Product Price</th>
                          <th>Photo</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($responseBody->results as $item)
                        <tr>
                          <td>{{ $item->nama_produk }}</td>
                          <td>{{ $item->deskripsi_produk }}</td>
                          <td>{{ $item->harga_produk }}</td>
                          <td>{{ $item->kategori_id }}</td>
                          <td>{{ $item->gambar_produk }}</td>
                          <td>{{ $item->status }}</td>
                          <td><button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success">Detail</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- /.content -->
      </div>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection
