<?php
session_start();
header('Access-Control-Allow-Origin: *');
ini_set('error_reporting', E_WARNING);
ini_set('display_errors', 'on');
asdfgjkkokl
/* ปรับปรุง 3 กันยายน 2564
ข้อมูลเกี่ยวกับ source code
เช่น select orderid, sum(quantity * unitprice) as total from `order details` group by orderid having sum(quantity * unitprice) > 1000  
มีตัวอย่าง ที https://github.com/thaiall/programming-page/blob/master/php/northwind.php  
*/
?><!DOCTYPE html><html lang="th"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 357 - 1 table and 3 fields</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300,400,400i,700">
<link rel="stylesheet" href="https://cdn.lazywasabi.net/fonts/ChulabhornLikit/ChulabhornLikitText.css" >
<style>
body {font-family:'Chulabhorn Likit Text';}
@font-face{
font-family:"Font Awesome 5 Brands";
font-style:normal;font-weight:normal;font-display:auto;
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.eot');
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.eot?#iefix') format("embedded-opentype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.woff2') format("woff2"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.woff') format("woff"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.ttf') format("truetype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-brands-400.svg#fontawesome') format("svg")
}.fab{font-family:"Font Awesome 5 Brands"}
@font-face{
font-family:"Font Awesome 5 Free";
font-style:normal;font-weight:400;font-display:auto;
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.eot');
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.eot?#iefix') format("embedded-opentype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.woff2') format("woff2"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.woff') format("woff"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.ttf') format("truetype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-regular-400.svg#fontawesome') format("svg")
}.far{font-weight:400}
@font-face{
font-family:"Font Awesome 5 Free";
font-style:normal;font-weight:900;font-display:auto;
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.eot');
src:url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.eot?#iefix') format("embedded-opentype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.woff2') format("woff2"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.woff') format("woff"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.ttf') format("truetype"),
url('https://adminlte.io/themes/v3/plugins/fontawesome-free/webfontsfa-solid-900.svg#fontawesome') format("svg")
}.fa,.far,.fas{font-family:"Font Awesome 5 Free"}.fa,.fas{font-weight:900}
</style>
</head><body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav" style="font-weight:bold;">
<li class="nav-item d-none d-sm-inline-block"><a href="https://thaiall.github.io/mygitfriends/adminlte_mygitfriends.htm" class="nav-link">Git friends</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://jakkapatchai.github.io/home/index.html" class="nav-link">คอม</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://warayutkhanka.github.io/home/" class="nav-link">หนึ่ง</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="http://www.gadios.lnw.mn/" class="nav-link">นิค</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://mim321.github.io/home/index.html" class="nav-link">มิ้ม</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://sampan6108111007.github.io/home/" class="nav-link">แบล็ค</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://kawintharawiw.github.io/home/index.html" class="nav-link">วิว</a></li>     
<li class="nav-item d-none d-sm-inline-block"><a href="https://www.thaiall.com/blog/burin/10298/" class="nav-link">6 sense</a></li>
<li class="nav-item d-none d-sm-inline-block"><a href="https://thaiall.github.io/www/adminlte/adminlte_github.htm" class="nav-link">github.io</a></li>
</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#000044;">
<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="background-color:black">
<div class="image"><img src="https://raw.githubusercontent.com/mim321/joom/master/555.jpeg" class="img-circle elevation-2"  alt="User Image"></div>
<div class="info"><a href="https://github.com/mim321" class="d-block">Nichapa<br/>Kajan</a></div>
</div>
<!-- Sidebar Menu -->
<nav class="mt-2" style="font-family:Kanit;">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item"><a href="?" class="nav-link"><i class="fas fa-circle nav-icon"></i><p>Home / Select</p></a></li>
<li class="nav-item"><a href="http://www.thaiall.com/adminlte-3.0.4/" class="nav-link"><i class="fas fa-circle nav-icon"></i><p>My AdminLTE 3.0.4</p></a></li>
<li class="nav-item"><a href="http://www.thaiall.com/adminlte-3.0.4/pages/examples/projects.html" class="nav-link"><i class="fas fa-circle nav-icon"></i><p>Project : view/edit/del</p></a></li>
<li class="nav-item"><a href="http://www.thaiall.com/project/indexo.html" class="nav-link"><i class="fas fa-circle nav-icon"></i><p>/Project </p></a></li>
<li class="nav-item has-treeview"><!-- menu-open -->
<a href="#" class="nav-link"><!-- active -->
<i class="nav-icon fas fa-tachometer-alt"></i> <p>Check code<i class="right fas fa-angle-left"></i></p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item"><a href="https://validator.w3.org/#validate_by_input" class="nav-link"><i class="far fa-circle nav-icon"></i> <p>check : html</p></a></li>
<li class="nav-item"><a href="https://jigsaw.w3.org/css-validator/validator" class="nav-link"><i class="far fa-circle nav-icon"></i> <p>check : css</p></a></li>
<li class="nav-item"><a href="https://phpcodechecker.com/" class="nav-link"><i class="far fa-circle nav-icon"></i> <p>check : php</p></a></li>
</ul>
</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<!-- Main row -->
<div class="row">
<?php
/* # 01 - ส่วนกำหนดค่าเริ่มต้นของระบบ */
$host = "localhost";
$db = "walletinfo";
$tb = "walletinfo";
$user = "root"; /* รหัสผู้ใช้ ให้สอบถามจากผู้ดูแลระบบ */
$password = ""; /* รหัสผ่าน ให้สอบถามจากผู้ดูแลระบบ */
$create_sql = "create table Category1
(CategoryID int(4), Category char(1), Categoryname text(20))
engine = InnoDB default charset=utf8 collate=utf8_unicode_ci;";
$drop_sql = "drop table Category1";
$table_header = "Employees";
if (isset($_REQUEST['action'])) $act = $_REQUEST['action']; else $act = "";
/* # จัดการ session ของ php7 */
if (isset($_REQUEST["v7"])) {
 $_SESSION["v7"] = false;
 if($_REQUEST["v7"] == "obj") $_SESSION["v7"] = true;
}

/* # 02 - ส่วนสร้าง และลบตาราง */
if (strlen($act) > 0 && ($act == "createtable" || $act == "droptable")) {
 doconnect();
 if($act == "droptable") doquery($drop_sql); else doquery($create_sql);
 footer("$act : completely<br/><a href='?'>back</a>");
 echo '<meta http-equiv="refresh" content="0; url='. $_SERVER["SCRIPT_NAME"] .'">';
}

/* # 03 - ส่วนแสดงผลหลัก ทั้งปกติ และหลังกดปุ่ม del หรือ edit */
if (strlen($act) == 0 || $act == "del" || $act == "edit") {
 doconnect();
 doquery("select * from Category1");
 if ($r) echo '<h4>Table : '. $table_header .'</h4> <!-- ถ้าใช้ section tag จะต้องเขียนอย่างน้อย 1 header tag -->
<table class="table table-striped projects">
<thead><tr>
<th style="width: 10%">CategoryID</th>
<th style="width: 40%">Category</th>
<th style="width: 10%">Categoryname</th>
<th style="width: 40%" class="text-center">Process</th>
</tr></thead></table>';
 while (dofetch("object")) {
 if (isset($_REQUEST['CategoryID']) && $_REQUEST['CategoryID'] == getfld("object","CategoryID")) $chg = " style='background-color:#f9f9f9"; else $chg = " readonly style='background-color:#ffffdd";
 echo "<form action='?' method=post><table class='table table-striped projects'><tr>
 <td style=\"width: 10%\"><input name=CategoryID size=5 value='". getfld("object","CategoryID") . "' style='background-color:#dddddd' readonly></td>
 <td style=\"width: 40%\"><input name=Category size=40 value='". getfld("object","Category") . "' $chg'></td>
 <td style=\"width: 10%\"><input name=Categoryname size=20 value='". getfld("object","Categoryname") . "' $chg;text-align:right'></td>
 <td style=\"width: 40%\">";
 if (isset($_REQUEST['CategoryID']) && $_REQUEST['CategoryID'] == getfld("object","CategoryID")) {
 if ($act == "del") echo "<input type=submit name=action value='del : confirm' class='btn btn-info btn-sm' style='background-color:#440000'>";
 if ($act == "edit") echo "<input type=submit name=action value='edit : confirm' class='btn btn-info btn-sm' style='background-color:#000044'>";
 } else {
 echo "<input type=submit name=action value='del' class='btn btn-info btn-sm' style='background-color:red'>";
 echo "<input type=submit name=action value='edit' class='btn btn-info btn-sm' style='background-color:blue'>";
 }
 echo "</td></tr></table></form>";
 } /* dofetch */
 if ($r == true) {
 echo "<form action='?' method=post><table class='table table-striped projects'><tr>
 <td style=\"width: 10%\"><input name=CategoryID size=5></td>
 <td style=\"width: 40%\"><input name=Category size=40></td>
 <td style=\"width: 10%\"><input name=Categoryname size=20></td><td style=\"width: 40%\">
 <input type=submit name=action value='add' class='btn btn-info btn-sm'></td>
 </tr></table></form>";
 if (isset($_SESSION["msg"]) && strlen($_SESSION["msg"]) > 1) {
 echo '<div class="col-12"><div class="small-box card-body"><div class="inner"><p style="text-align:center;">';
 echo $_SESSION["msg"]; /* แสดงผลค่านี้ หลังการ Refresh */
 echo '</p></div></div></div>';
 }
 $_SESSION["msg"] = ""; /* เมื่อแสดงผลแล้ว ก็ล้างค่านี้จากตัวแปร msg */
 footer(null);
 }
}

/* # 04 - ส่วนเพิ่มข้อมูล */
if ($act == "add") {
 doconnect();
 doquery("insert into $tb values('". $_REQUEST['CategoryID'] . "','". $_REQUEST['Category'] . "','". $_REQUEST['Categoryname'] . "')");
 if ($r) $_SESSION["msg"] = "insert : completely";
 footer("refresh");
}

/* # 05 - ส่วนลบข้อมูล */
if ($act == "del : confirm") {
 doconnect();
 doquery("delete from $tb where CategoryID ='". $_REQUEST['CategoryID'] . "'");
 if ($r) $_SESSION["msg"] = "delete : completely";
 footer("refresh");
}

/* # 06 - ส่วนแก้ไขข้อมูล */
if ($act == "edit : confirm") {
 doconnect();
 doquery("update $tb set Category ='". $_REQUEST['Category'] . "', Categoryname ='". $_REQUEST['Categoryname'] . "' where CategoryID =" . $_REQUEST['CategoryID']);
 footer("refresh");
}

/* # 07 - footer */
function footer($msg){
 global $conn;
 if($msg == "refresh") {
 echo '<meta http-equiv="refresh" content="0; url='. $_SERVER["SCRIPT_NAME"] .'">';
 if (isset($_SESSION["v7"]) && $_SESSION["v7"] == true) mysqli_close($conn); else $conn->close();
 }
 if (strlen($msg) > 1) {
 echo '<div class="col-lg-3 col-12"><div class="small-box bg-info"><div class="inner"><p>'. $msg .'</p></div></div></div>';
 }
 if ((int)phpversion() >=7)
 echo '<div class="col-lg-8 col-4"><div class="small-box card-body">';
 else
 echo '<div class="col-12"><div class="small-box bg-warning">';
 echo '<div class="inner"><p style="text-align:center;">';
 echo "<a href='?action=createtable'>create table</a> : <a href='?action=droptable'>drop table</a>";
 echo "<br/>version " . (int)phpversion() . " : ";
 echo '</p></div></div></div>';
 if ((int)phpversion() >=7) {
 echo '<div class="col-lg-4 col-8"><div class="small-box bg-warning"><div class="inner"><p>';
 if (isset($_SESSION["v7"]) && $_SESSION["v7"] == false)
 echo "<a href='?v7=obj'>mysqli object</a> : mysqli no object";
 else
 echo "mysqli object : <a href='?v7=noobj'>mysqli no object</a>";
 echo '</p></div></div></div>';
 }
}

/* # 08 - connect */
function doconnect(){
 global $conn,$host,$user,$password,$db;
 if ((int)phpversion() >=7) {
 if (isset($_SESSION["v7"]) && $_SESSION["v7"] == false) {
 /* v7 เลือก connect ได้ 2 แบบ */
 /* แบบแรก mysqli_connect */
 $conn = mysqli_connect($host, $user, $password, $db);
 if (!$conn) footer("Connection failed: " . mysqli_connect_error());
 } else {
 /* แบบที่สอง new mysqli */
 $conn = new mysqli($host, $user, $password, $db);
 if ($conn->connect_error) footer("Connection failed: " . $conn->connect_error);
 }
 } else {
 /* v5 ใช้แบบ mysql_connect */
 $conn = mysqli_connect($host, $user, $password, $db);	
 if (!$conn) footer("Connection failed: " . mysqli_connect_error());
 }
}

/* # 09 - query */
function doquery($myq){
 global $r,$conn,$db;
 if ((int)phpversion() >=7) {
 if (isset($_SESSION["v7"]) && $_SESSION["v7"] == false) {
 $r = mysqli_query($conn,$myq);
 } else {
 $r = $conn->query($myq);
 }
 if (!$r) footer("Query : Fail<br/>$myq");
 } else {
 $r = mysqli_query($conn,$myq);
 if (!$r) footer("Query : Fail<br/>$myq");
 }
}

/* # 10 - fetch */
function dofetch($t) {
 global $o, $r; /* object, assoc, array */
 if(!$r) { $o = false; return false; }
 if ((int)phpversion() >=7) {
 if($t == "object") return $o = $r->fetch_object();
 } else {
 if($t == "object") return ($o = mysqli_fetch_object($r));
 }
}

/* # 11 - get field value ตามชื่อเขตข้อมูล */
function getfld($t,$fld) {
 global $o; /* การอ้างอิงเขตข้อมูลเหมือนกันทั้งใน php7 และ php5 */
 if($t == "object") return ($o->{$fld});
}
?>
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
<div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.0.4</div>
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://www.masterhook.net/public/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
</body></html>