<div class="row">
  <div class="row frmtitle">
    <H1>DANH SÁCH LOẠI XE</H1>
  </div>
  <div class="row frmcontent">

    <div class="row mb10 frmdsloai">
      <table>
        <tr>
          <th></th>
          <th>MÃ LOẠI</th>
          <th>TÊN LOẠI</th>
          <th>BIỂN SỐ XE</th>
          <th>NGÀY NHẬP</th>
          <th></th>
        </tr>
        <?php
        foreach ($listloaixe as $loaixe) {
          extract($loaixe);
          $sualx =  "index.php?act=sualx&ma_loai=" . $ma_loai;
          $xoalx =  "index.php?act=xoalx&ma_loai=" . $ma_loai;
          echo ' <tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>' . $ma_loai . '</td>
                          <td>' . $ten_loai . '</td>
                          <td>' . $bien_so_xe . '</td>
                          <td>' . $ngay_nhap . '</td>
                          <td> <a href="' . $sualx . '"> <input type="button" value="Sửa"> </a> <a href = "' . $xoalx . '"> <input type="button" value="Xóa"></a> </td>
                      </tr>';
        }
        ?>

      </table>
    </div>
    <div class="row mb10">
      <input type="button" value="Chọn tất cả">
      <input type="button" value="Bỏ chọn tất cả">
      <input type="button" value="Xóa các mục đã chọn">
      <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
    </div>
  </div>
</div>