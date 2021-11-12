<div class="row">
  <div class="row frmtitle">
    <H1>THÊM MỚI LOẠI XE</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=adddm" method="post">
      <div class="row mb10">
        Mã loại<br>
        <input type="text" name="ma_loai">
      </div>
      <div class="row mb10">
        Tên loại<br>
        <input type="text" name="ten_loai">
      </div>
      <div class="row mb10">
        Biển Số Xe<br>
        <input type="text" name="bien_so_xe">
      </div>
      <div class="row mb10">
        Ngày Nhập<br>
        <input type="text" name="ngay_nhap">
      </div>
      <div class="row mb10">
        <input type="submit" name="themmoi" value="THÊM MỚI">
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