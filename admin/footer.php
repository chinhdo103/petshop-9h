<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- SweetAlert2 -->
<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
//xem chi tiết dữ liệu - account
$('.view-data').click(function() {
    var password = $(this).attr('data-password');
    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var level = $(this).attr('data-level');
    var username = $(this).attr('data-username');
    document.getElementById('password').innerHTML = password;
    document.getElementById('id').innerHTML = id;
    document.getElementById('name').innerHTML = name;
    document.getElementById('username').innerHTML = username;
    document.getElementById('level').innerHTML = level;

    // console.log(password)
});

//xem chi tiết dữ liệu - khách hàng
$('.view-data-kh').click(function() {
    var makh = $(this).attr('data-makh');

    var tenkh = $(this).attr('data-tenkh');
    var email = $(this).attr('data-email');
    var matkhau = $(this).attr('data-matkhau');
    var sdt = $(this).attr('data-sdt');
    var diachi = $(this).attr('data-diachi');
    document.getElementById('makh').innerHTML = makh;

    document.getElementById('tenkh').innerHTML = tenkh;
    document.getElementById('email').innerHTML = email;
    document.getElementById('matkhau').innerHTML = matkhau;
    document.getElementById('sdt').innerHTML = sdt;
    document.getElementById('diachi').innerHTML = diachi;
    // console.log(password)
});

//xem chi tiết dữ liệu - account
$('.view-data-dm').click(function() {

    var madm = $(this).attr('data-madm');
    var tendm = $(this).attr('data-tendm');
    var motadm = $(this).attr('data-motadm');
    // var username = $(this).attr('data-username');
    // document.getElementById('password').innerHTML = password;
    document.getElementById('madm').innerHTML = madm;
    document.getElementById('tendm').innerHTML = tendm;
    document.getElementById('motadm').innerHTML = motadm;
    // document.getElementById('level').innerHTML = level;

    // console.log(password)
});
$('.view-data-dmchinh').click(function() {

    var madmchinh = $(this).attr('data-madmchinh');
    var tendmchinh = $(this).attr('data-tendmchinh');
    var motadmchinh = $(this).attr('data-motadmchinh');
    var madm = $(this).attr('data-madm');
    // var username = $(this).attr('data-username');
    // document.getElementById('password').innerHTML = password;
    document.getElementById('madmchinh').innerHTML = madmchinh;
    document.getElementById('tendmchinh').innerHTML = tendmchinh;
    document.getElementById('motadmchinh').innerHTML = motadmchinh;
    document.getElementById('madm').innerHTML = madm;
    // document.getElementById('level').innerHTML = level;

    // console.log(password)
});
$('.view-data-dmphu').click(function() {

    var madmphu = $(this).attr('data-madmphu');
    var tendmphu = $(this).attr('data-tendmphu');
    var madmchinh = $(this).attr('data-madmchinh');
    var motadmphu = $(this).attr('data-motadmphu');
    // var username = $(this).attr('data-username');
    // document.getElementById('password').innerHTML = password;
    document.getElementById('madmphu').innerHTML = madmphu;
    document.getElementById('tendmphu').innerHTML = tendmphu;
    document.getElementById('madmchinh').innerHTML = madmchinh;
    document.getElementById('motadmphu').innerHTML = motadmphu;
    // document.getElementById('level').innerHTML = level;

    // console.log(password)
});

//xem chi tiết thuong hiệu
$('.view-data-th').click(function() {

    var math = $(this).attr('data-math');
    var tenth = $(this).attr('data-tenth');
    var image_th = $(this).attr('data-image_th');
    var motath = $(this).attr('data-motath');
    // var username = $(this).attr('data-username');
    // document.getElementById('password').innerHTML = password;
    document.getElementById('math').innerHTML = math;
    document.getElementById('tenth').innerHTML = tenth;
    document.getElementById('image_th').innerHTML = image_th;
    document.getElementById('motath').innerHTML = motath;
    // document.getElementById('level').innerHTML = level;

    // console.log(password)
});

//xem chi tiết san pham
$('.view-data-sp').click(function() {

    var masp = $(this).attr('data-masp');
    var tensp = $(this).attr('data-tensp');
    var anhsp = $(this).attr('data-anhsp');
    var math = $(this).attr('data-math');
    var madmphu = $(this).attr('data-madmphu');
    var phanloai = $(this).attr('data-phanloai');
    var giaban = $(this).attr('data-giaban');
    var motasp = $(this).attr('data-motasp');
    // var username = $(this).attr('data-username');
    // document.getElementById('password').innerHTML = password;
    document.getElementById('masp').innerHTML = masp;
    document.getElementById('tensp').innerHTML = tensp;
    document.getElementById('anhsp').innerHTML = anhsp;
    document.getElementById('math').innerHTML = math;
    document.getElementById('madmphu').innerHTML = madmphu;
    document.getElementById('phanloai').innerHTML = phanloai;
    document.getElementById('giaban').innerHTML = giaban;
    document.getElementById('motasp').innerHTML = motasp;
    // document.getElementById('level').innerHTML = level;

    // console.log(password)
});

$(document).ready(function() {
    setInterval(function() {
        $('#report-mhs').load("banner.php");
    }, 5000);
})
</script>
</script>