<?php
require_once 'koneksi.php';

$idwo         = $_POST["id_wo"];
$id_bag       = $_POST["id_bag"];
$id_user      = $_POST["id_user"];
$tgl_mulai    = $_POST["tanggal_mulai"];
$tgl_selesai  = $_POST["tanggal_selesai"];
$id_oper      = $_POST["id_oper"];
$tindakan     = $_POST["tindakan"];
$ket          = $_POST["keterangan"];
$status       = $_POST["status"];
$tipe         = $_POST["tipe_pekerjaan"];

$q=sqlsrv_query($koneksi,"INSERT INTO [apd_base].[dbo].[drop_wo]
  ([id_wo],[id_bag],[id_user],[tanggal_mulai],[tanggal_selesai],[id_oper],[tindakan],[keterangan],[status],[tipe_pekerjaan])
  VALUES
  ('$idwo','$id_bag','$id_user','$tgl_mulai','$tgl_selesai','$id_oper','$tindakan','$ket','$status','$tipe')"); 
if ($id_oper=='0') {
  $z=sqlsrv_query($koneksi,"UPDATE [apd_base].[dbo].[work_order] SET id_bag='$id_bag' where id_wo='$idwo'");

} else {
  $z=sqlsrv_query($koneksi,"UPDATE [apd_base].[dbo].[work_order] SET id_bag='$id_oper' where id_wo='$idwo'");
}

if($status=='selesai'){
    $a=sqlsrv_query($koneksi,"UPDATE [apd_base].[dbo].[work_order] SET status='selesai',tanggal_selesai='$tgl_selesai' where id_wo='$idwo'");
  }

if ($q){
  ?>
  <script language="javascript">
    alert("Drop Work Order Berhasil Ditambahkan");
    history.back();
  </script>
  <?php } else
  {

    echo "<script>
    alert ('Data work order gagal disimpan');
  </script>";
  echo "gagal total";
  die( print_r( sqlsrv_errors(), true));
}
?>