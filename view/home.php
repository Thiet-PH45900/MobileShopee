<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/images/banner1.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/images/banner2.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/images/banner3.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <!-- Next and previous buttons -->
                        
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                   
                    $i=0;
                        foreach ($spnew as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                            <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                            <p style="font-size :20px;margin-left:10px;">'.$price.'$</p>
                            <a style="font-size :15px;margin-left:10px;text-decoration: none;" href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        $i+=1;
                        }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/1002.jpg" alt=""></div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div> -->
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>