<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<!-- jQuery -->

<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('Admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>


<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('Admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('Admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('Admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('Admin/plugins/moment/moment.min.js')}}"></script>
<!-- <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('Admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('Admin/dist/js/pages/dashboard.js')}}"></script> -->
<!------------------- Ck Editor  ---------------------->

<script src="{{asset('Admin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('Admin/ckeditor/config.js')}}"></script>
<script src="{{asset('Admin/ckeditor/build-config.js')}}"></script>
<script src="{{asset('Admin/ckeditor/plugins/youtube/plugin.js')}}"></script>

<script>
CKEDITOR.replace( 'contant',
 {

     filebrowserBrowseUrl: '../../Admin/ckfinder/ckfinder.html',
     filebrowserImageBrowseUrl: '../../Admin/ckfinder/ckfinder.html?type=Images',
     filebrowserUploadUrl: '../../Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
     filebrowserImageUploadUrl: '../../Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

 });

 CKFinder.start();

</script>
<!------------------- End Ck Editor  ---------------------->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
<script>
     $(document).on("click", "#customRadio1", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });
        $(document).on("click", "#customRadio3", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });
        $(document).on("click", "#customRadio2", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });  
            $(document).on("click", "#customRadio4", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });  
            $(document).on("click", "#customRadio5", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });  
            $(document).on("click", "#customRadio6", function(e) {
            var checked = $(this).attr("checked");
            if(!checked){
                $(this).attr("checked", true);
            } else {
                $(this).removeAttr("checked");
                $(this).prop("checked", false);
            }
        });  
</script>
<script>

$('#deletelatestnews').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var latestnew_id = button.data('latestnewid')
    var modal = $(this)
    modal.find('.modal-body #latestnew_id').val(latestnew_id);
})
$('#deleteAboutus').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var aboutus_id = button.data('aboutusid')
      console.log(aboutus_id )
      var modal = $(this)
      modal.find('.modal-body #aboutus_id').val(aboutus_id);
})
$('#deletecategory').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var category_id = button.data('categoryid')
      var modal = $(this)
      modal.find('.modal-body #category_id').val(category_id);
})
$('#deletecategoryproduct').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var categoryproduct_id = button.data('categoryproductid')
      var modal = $(this)
      modal.find('.modal-body #categoryproduct_id').val(categoryproduct_id);
})

$('#deletegame').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var game_id = button.data('gameid')
      var modal = $(this)
      modal.find('.modal-body #game_id').val(game_id);
})
$('#deletepaymentgateway').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var paymentgateway_id = button.data('paymentgatewayid')
      var modal = $(this)
      modal.find('.modal-body #paymentgateway_id').val(paymentgateway_id);
})

$('#deleteprivacypolicy').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var privacypolicy_id = button.data('privacypolicesid')
      console.log(privacypolicy_id )
      var modal = $(this)
      modal.find('.modal-body #privacypolicy_id').val(privacypolicy_id);
})
$('#deleteproduct').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var product_id = button.data('productid')
      var modal = $(this)
      modal.find('.modal-body #product_id').val(product_id);
})
$('#deleteslider').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var slider_id = button.data('sliderid')
      var modal = $(this)
      modal.find('.modal-body #slider_id').val(slider_id);
})
$('#deleteusagepolicy').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var usagepolicy_id = button.data('usagepolicyid')
      var modal = $(this)
      modal.find('.modal-body #usagepolicy_id').val(usagepolicy_id);
})
$('#deletevideo').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var video_id = button.data('videoid')
      var modal = $(this)
      modal.find('.modal-body #video_id').val(video_id);
})
$('#deleteinstructions').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var instructions_id = button.data('instructionsid')
      var modal = $(this)
      modal.find('.modal-body #instructions_id').val(instructions_id);
})
</script> 
</body>
</html>
