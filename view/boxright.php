<div class="row mb">
    <div class="boxtitle">Tài Khoản</div>
    <div class="boxcontent formtk">
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                Hello<br>
                <?=$user?>
            </div>
        <div class="row mb10">
        <li>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
        </li>
        <?php if($role==1){ ?>
        <li>
            <a href="admin/index.php">Đăng nhập admin</a>
        </li>
        <?php }?>
        <li>
            <a href="index.php?act=thoat">Thoát</a>
        </li>
            </div>
        <?php        
            }else{
       
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="mb10">
                Tên đăng nhập
                <input type="text" name="user">
            </div>
            <div class="mb10">
                Mật khẩu
                <input type="password" name="pass">
            </div>
            <div class="mb10">
                <input type="checkbox" name="" >Ghi nhớ tài khoản ?<br> 
            </div>
            <div class="mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
            
            
        </form>
        <li>
            <a href="#">Quên mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=dangky">Đăng kí thành viên</a>
        </li>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">Danh Mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '<li>
                    <a href="'.$linkdm.'">'.$tendanhmuc.'</a>
                </li>';
                }
            ?>
                <!-- <li>
                <a href="#">Đồng hồ</a>
            </li>
            <li>
                <a href="#">Laptop</a>
            </li>
            <li>
                <a href="#">Điện thoại</a>
            </li>
            <li>
                <a href="#">Balo</a>
            </li>
            <li>
                <a href="#">Nước Hoa</a>
            </li>
            <li>
                <a href="#">Nón Thời Trang</a>
            </li>
            <li>
                <a href="#">Túi Xách</a>
            </li>
            <li>
                <a href="#">Iphone 2024</a>
            </li>  -->
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">Top 10 Yêu Thích</div>
    <div class=" row boxcontent">
        <?php
            foreach($dstop10 as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $img=$img_path.$img;
                echo '<div class="row mb10 top10">
                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                        <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
            }
        ?>
        <!-- <div class="row mb10 top10">
            <img src="view/images/1005.jpg" alt="">
            <a href="#">Sir Rodney</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1006.jpg" alt="">
            <a href="#">Cat de blaye</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1007.jpg" alt="">
            <a href="#">Siroi</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1009.jpg" alt="">
            <a href="#">Rodney</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1008.jpg" alt="">
            <a href="#">Uisso</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1001.jpg" alt="">
            <a href="#">Siaocp</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1002.jpg" alt="">
            <a href="#">roonaud </a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/1004.jpg" alt="">
            <a href="#">fia no way</a>
        </div> -->
    </div>
</div>