<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height ='50px' width = '50px'> ";
} else {
  $hinh = "Không có hình";
}
?>
<div class="row">
  <div class="row frmtitle">
    <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row mb10">
        <select name="iddm">
          <option value="0" selected>Tất cả</option>
          <?php foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            if ($iddm == $id) $s = "selected";
            else $s = "";
            echo '<option value="' . $id . '" ' . $s . '> ' . $name . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="row mb10">
        Tên Sản Phẩm<br>
        <input type="text" name="tensp" value="<?= $name ?>">
      </div>
      <div class="row mb10">
        Giá Sản Phẩm<br>
        <input type="text" name="giasp" <?= $price ?>>
      </div>
      <div class="row mb10">
        Hình Ảnh<br>
        <input type="file" name="hinh">
        <?= $hinh ?>
      </div>
      <div class="row mb10">
        Mô Tả <br>
        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
      </div>

      <div class="row mb10">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" name="capnhat" value="CẬP NHẬT">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=lissp"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
      ?>

    </form>
  </div>
</div>