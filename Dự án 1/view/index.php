<?php
include "header.php";

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'huongdan':
      include "huongdan.php";
      break;

    case 'sanpham':
      include "sanpham.php";
      break;

    case 'chitietsp':
      include "chitietsp.php";
      break;

      case 'gioithieu':
      include "gioithieu.php";
      break;

    default:
      include "home.php";
      break;
  }
} else {
  include "home.php";
}
include "footer.php";
?>