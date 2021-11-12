<?php
//thêm
function insert_loaixe($ma_loai, $ten_loai, $bien_so_xe, $ngay_nhap)
{
  $sql = " insert into loaixe(ma_loai,ten_loai,bien_so_xe,ngay_nhap) values ('$ma_loai','$ten_loai','$bien_so_xe','$ngay_nhap')";
  pdo_execute($sql);
}

//xoa
function delete_loaixe($ma_loai)
{
  $sql = "delete from loaixe where ma_loai = " . $_GET['ma_loai'];
  pdo_execute($sql);
}
//load
function loadall_loaixe()
{
  $sql = "select * from loaixe order by ma_loai desc";
  $listloaixe = pdo_query($sql);
  return $listloaixe;
}
//load 1
function loadone_loaixe($ma_loai)
{
  $sql = "select * from loaixe where ma_loai = " . $_GET['ma_loai'];
  $lx = pdo_query_one($sql);
  return $lx;
}
//cap nhat
function update_loaixe($ten_loai, $bien_so_xe, $ngay_nhap,$ma_loai)
{
  $sql = " update loaixe set ten_loai ='" . $ten_loai . "',  bien_so_xe ='" . $bien_so_xe . "', ngay_nhap ='" . $ngay_nhap . "' where ma_loai =" . $ma_loai;
  pdo_execute($sql);
}