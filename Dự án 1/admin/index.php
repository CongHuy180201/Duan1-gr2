<?php
include "model/pdo.php";
include "header.php";
include "model/danhmuc.php";
include "model/sanpham.php";

//controler
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'adddm':
      //kiem tra nguoi dung click vao nut add
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $ma_loai = $_POST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        $bien_so_xe = $_POST['bien_so_xe'];
        $ngay_nhap = $_POST['ngay_nhap'];
        insert_loaixe($ma_loai, $ten_loai, $bien_so_xe, $ngay_nhap);
        $thongbao = "Thêm Thành Công";
      }
      include "danhmuc/add.php";
      break;

    case 'lisdm':
      $listloaixe = loadall_loaixe();
      include "danhmuc/list.php";
      break;

    case 'xoalx':
      if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
        delete_loaixe($_GET['ma_loai']);
      }
      $listloaixe = loadall_loaixe();
      include "danhmuc/list.php";
      break;

    case 'sualx':
      if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
        $lx = loadone_loaixe($_GET['ma_loai']);
      }
      include "danhmuc/update.php";
      break;

    case 'updatedm':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $ten_loai = $_POST['ten_loai'];
        $ma_loai = $_POST['ma_loai'];
        $bien_so_xe = $_POST['bien_so_xe'];
        $ngay_nhap = $_POST['ngay_nhap'];
        update_loaixe($ten_loai,$bien_so_xe,$ngay_nhap,$ma_loai);
        $thongbao = "Cập Nhật Thành Công";
      }
      $listloaixe = loadall_loaixe();
      include "danhmuc/list.php";
      break;

      /* Controller sanpham*/
      ////////////////////////////////////////////////////////////////////////
    case 'addsp':
      //kiem tra nguoi dung click vao nut add
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " Upload Thành Công";
        } else {
          // echo "Upload Thất Bại";
        }
        insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
        $thongbao = "Thêm Thành Công";
      }
      $listdanhmuc = loadall_danhmuc();
      include "sanpham/add.php";
      break;

    case 'listsp':
      if (isset($_POST['listok']) && ($_POST['listok'])) {
        $keyw = $_POST['keyw'];
        $iddm = $_POST['iddm'];
      } else {
        $keyw = '';
        $iddm = 0;
      }
      $listdanhmuc = loadall_danhmuc();
      $listsanpham = loadall_sanpham($keyw, $iddm);
      include "sanpham/list.php";
      break;

    case 'xoasp':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_sanpham($_GET['id']);
      }
      $listsanpham = loadall_sanpham("", 0);
      include "sanpham/list.php";
      break;

    case 'suasp':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $sanpham = loadone_sanpham($_GET['id']);
      }
      $listdanhmuc = loadall_danhmuc();
      include "sanpham/update.php";
      break;

    case 'updatesp':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $id = $_POST['id'];
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " Upload Thành Công";
        } else {
          // echo "Upload Thất Bại";
        }
        update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
        $thongbao = "Cập Nhật  Thành Công";
      }
      $listdanhmuc = loadall_danhmuc();
      $listsanpham = loadall_sanpham();
      include "sanpham/list.php";
      break;
    default:
      include "home.php";
      break;


    case 'dskh':
      $listtaikhoan = loadall_taikhoan();
      include "../view/taikhoan/listtk.php";
      break;

    case 'xoatk':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_taikhoan($_GET['id']);
      }
      $listtaikhoan = loadall_taikhoan("", 0);
      include "../view/taikhoan/listtk.php";
      break;
  }
} else {
  include "home.php";
}
include "footer.php";