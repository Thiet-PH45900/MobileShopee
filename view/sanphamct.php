<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle"><?= $name?></div>
                    <div class=" row boxcontent">
                        <?php
                            
                            $img=$img_path.$img;
                            echo '<div class="row mb spct" style="text-align: center;"><img src="'.$img.'" height="300px" "width=300px"></div>';
                            echo '<li style="font-size: 15px;"><a style="font-size: 15px;"> Tên sản phẩm : '.$name.'</a></li>
                            <li style="font-size: 15px;"><a style="font-size: 15px;">Giá : '.$price.'$</a></li>
                            <li style="font-size: 15px;"><a style="font-size: 15px;">Mã hàng hóa: '.$iddm.'</a></li><br>
                            ';
                            
                            echo '<a style="font-size: 15px;">Mô tả sản phẩm : '.$mota.'</a><br>';
                        ?>
                    </div>
                   
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                         $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="row" id="binhluan">
                    
                </div>

                <div class="row mb">
                    <div class="boxtitle">Sản phẩm cùng loại</div>
                    <div class=" row boxcontent">
                        <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                               extract($sp_cung_loai);
                               $linksp="index.php?act=sanphamchitiet&idsp=".$id;                               
                               echo'<li><a href="'.$linksp.'">'.$name.'</a></li>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php include "boxright.php";?>
            </div>
        </div>