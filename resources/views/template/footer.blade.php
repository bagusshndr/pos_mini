  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      responsive: true,
      autoWidth: false,
      scrollX: true,
    });
    $("#example2").DataTable({
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      info: true,
      autoWidth: false,
      responsive: true,
      scrollX: true,
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#example").DataTable({
      scrollX: true,
    });
  });
</script>
<script>
  $(document).on("click", ".buttonedit", function () {
     var UserName = $(this).data('id');
     var nama_produk = $(this).data('nama_produk');
     var deskripsi_produk = $(this).data('deskripsi_produk');
     var harga_produk = $(this).data('harga_produk');
     var nama_produk = $(this).data('nama_produk');
     var gambar_produk = $(this).data('gambar_produk');
     var status = $(this).data('status');
     $(".modal-body #product_name").val( nama_produk );
     $(".modal-body #product_description").val( deskripsi_produk );
     $(".modal-body #product_price").val( harga_produk );
     $(".modal-body #category_id").val( nama_produk );
     $(".modal-body #photo").val( gambar_produk );
     $(".modal-body #is_active").val( status );
  });
</script>