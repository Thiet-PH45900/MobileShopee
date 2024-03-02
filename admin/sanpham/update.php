<?php
// print_r($sanpham);
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='100' height='70'>";
} else {
    $hinh = "no photo";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật sản phẩm</h1>
    </div>
</div>
<div class="row formcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="row mb10">
            <select name="iddm" id="">
                <!-- <option value="0" selected>Tất cả</option> -->
                <!--  -->
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if ($iddm == $id)
                        echo '<option value="' . $id . '" selected>' . $tendanhmuc . '</option>';
                    else echo '<option value="' . $id . '">' . $tendanhmuc . '</option>';
                }
                ?>

            </select>
        </div>

        <div class="row mb10">
            Tên sản phẩm<br>
            <input type="text" name="tensp" value="<?= $sanpham['name'] ?>">
        </div>
        <div class="row mb10">
            Giá<br>
            <input type="text" name="giasp" value="<?= $sanpham['price'] ?>">
        </div>
        <div class="row mb10">
            Hình<br>
            <input type="file" name="hinh">
            <?= $sanpham['img'] ?>
        </div>
        <div class="row mb10">
            Mô tả<br>
            <textarea name="mota" cols="30" rows="10"><?= $sanpham['mota'] ?></textarea>
        </div>

        <input type="text" name="id" value="<?= $sanpham['id'] ?>">
        <input type="hidden" name="view" value="<?= $view ?>">

        <div class="row mb10">
            <input type="submit" name="capnhat" value="Cập nhật">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>
</div>