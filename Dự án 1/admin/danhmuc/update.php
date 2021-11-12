<?php
if (is_array($lx)) {
  extract($lx);
}
?>
<div class="row">
  <div class="row frmtitle">
    <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatedm" method="post">
      <div class="row mb10">
        Mã loại<br>
        <input type="text" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai != "")) echo $ma_loai; ?> "
          disabled>
      </div>
      <div class="row mb10">
        Tên loại<br>
        <input type="text" name="ten_loai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
      </div>
      <div class="row mb10">
        Biển Số Xe<br>
        <input type="text" name="bien_so_xe"
          value="<?php if (isset($bien_so_xe) && ($bien_so_xe != "")) echo $bien_so_xe; ?>">
      </div>
      <div class="row mb10">
        Ngày Nhập<br>
        <input type="text" name="ngay_nhap"
          value="<?php if (isset($ngay_nhap) && ($ngay_nhap != "")) echo $ngay_nhap; ?>">
      </div>
      <div class=" row mb10">
        <input type="hidden" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
      ?>

    </form>
  </div>
</div>