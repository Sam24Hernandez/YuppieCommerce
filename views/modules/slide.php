<?php
$server = Route::ctrRouteServer();
?>

<!-- === Slide Banner === -->
<section class="container-fluid" id="slide">

    <div class="row other_browser">
        
        <!-- Slides --> 
        
        <ul>
            
            <?php
            
                $server = Route::ctrRouteServer();
                
                $slide = SlideController::ctrShowSlide();
                
                foreach ($slide as $key => $value) {
                    
                    $styleImgProduct = json_decode($value["product_img_style"], true);
                    $styleTextSlide = json_decode($value["slide_text_style"], true);
                    $title = json_decode($value["title1"], true);
                    $description = json_decode($value["description1"], true);
                    
                    echo '<li>
                        <img src="'.$server.$value["bg_img"].'">

                        <div class="slide-options '.$value["slide_type"].'">';
                           
                            if($value["bg_product"] != "") {
                                echo '<img class="product-img" src="'.$server.$value["bg_product"].'" style="top:'.$styleImgProduct["top"].'%; right:'.$styleImgProduct["right"].'%; width:'.$styleImgProduct["width"].'%; left:'.$styleImgProduct["left"].'%">';
                            }

                            echo '<div class="slide-text" style="top:'.$styleTextSlide["top"].'%; left:'.$styleTextSlide["left"].'%; width:'.$styleTextSlide["width"].'%; right:'.$styleTextSlide["right"].'%">
                                <h1 style="color:'.$title["color"].'">'.$title["text"].'</h1>
                                <h3 style="color:'.$description["color"].'">'.$description["text"].'</h3>';
                                
                                if($value["button"] != "") {
                                    echo '<a href="'.$value["url"].'">
										
                                            <button class="primary-btn">

                                            '.$value["button"].' <span class="fa fa-chevron-right"></span>

                                            </button>

                                    </a>';
                                }

                            echo '</div>
                        </div>
                    </li> ';
                    
                }
                
            ?>
                                   
        </ul>
        
        <!-- == Pagination == -->
        <ol id="pagination">
            <li item="1"><span class="fa fa-circle"></span></li>
            <li item="2"><span class="fa fa-circle"></span></li>
            <li item="3"><span class="fa fa-circle"></span></li>
            <li item="4"><span class="fa fa-circle"></span></li>
        </ol>
        
        <!-- == Arrows Carousel == -->
        <div class="arrows" id="previous"><span class="fa fa-chevron-left"></span></div>
        <div class="arrows" id="next"><span class="fa fa-chevron-right"></span></div>
    </div>
</section>

<center>
    <button id="btnSlide" class="backColor">
        <i class="fa fa-angle-up" title="Ocultar Slide"></i>
    </button>
</center>
