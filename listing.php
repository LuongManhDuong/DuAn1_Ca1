<?php
```php
$iddm = $_POST['iddm'];
$tensp = $_POST['tensp'];
$giasp = $_POST['giasp'];
$mota = $_POST['mota'];
$hinh = $_FILES['hinh']['name'];
// ... (phần xử lý ảnh và thêm sản phẩm vào cơ sở dữ liệu)
insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
```



```php
$kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
$iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham($kyw, $iddm);
include 'sanpham/list.php';
```



```php
if (isset($_GET['id']) && $_GET['id'] > 0) {
    delete_sanpham($_GET['id']);
}
$listsanpham = loadall_sanpham('', 0);
include 'sanpham/list.php';
```



```php
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $sanpham = loadone_sanpham($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
include 'sanpham/update.php';
```



```php
if (isset($_POST['capnhap']) && $_POST['capnhap']) {
    $id = $_POST['id'];
    $iddm = $_POST['iddm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $mota = $_POST['mota'];
    $hinh = $_FILES['hinh']['name'];
    // ... (phần xử lý ảnh và cập nhật thông tin sản phẩm)
    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
    $thongbao = 'Cập nhật thành công';
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham('', 0);
include 'sanpham/list.php';
?>