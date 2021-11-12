<?php
function insert_binhluan($noi_dung, $id_sp, $id_user, $ngay_bl)
{
  $sql = " insert into binhluan (noi_dung,id_sp,id_user,ngay_bl) values ('$noi_dung','$id_sp','$id_user','$ngay_bl')";
  pdo_execute($sql);
}