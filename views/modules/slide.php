<?php
$server = Route::ctrRouteServer();
?>

<!-- === Slide Banner === -->
<section class="container-fluid" id="slide">

    <div class="row">
        <ul>
            <!-- Slide 1 -->
            <li>
                <img src="<?php echo $server; ?>views/img/slide/default/back_default.jpg">

                <div class="slide-options slide-option1">
                    <img class="product-img" src="<?php echo $server; ?>views/img/slide/slide1/calzado.png">

                    <div class="slide-text">
                        <h1>Black Friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="btn btn-secondary">Comprar Ahora <span class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </li>
            
            <!-- Slide 2 -->
            <li>
                <img src="<?php echo $server; ?>views/img/slide/default/back_default.jpg">

                <div class="slide-options slide-option2">
                    <img class="product-img" src="<?php echo $server; ?>views/img/slide/slide2/curso.png">

                    <div class="slide-text">
                        <h1>Black Friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="btn btn-secondary">Comprar Ahora <span class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </li>
            
            <!-- Slide 3 -->
            <li>
                <img src="<?php echo $server; ?>views/img/slide/slide3/fondo2.jpg">

                <div class="slide-options slide-option2">
                    <img class="product-img" src="<?php echo $server; ?>views/img/slide/slide3/iphone.png">

                    <div class="slide-text">
                        <h1>Black Friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="btn btn-secondary">Comprar Ahora <span class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </li>
            
            <!-- Slide 4 -->
            <li>
                <img src="<?php echo $server; ?>views/img/slide/slide4/fondo3.jpg">

                <div class="slide-options slide-option1">
                    <img class="product-img" src="">

                    <div class="slide-text">
                        <h1>Black Friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="btn btn-secondary">Comprar Ahora <span class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
            </li>
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
        <i class="fa fa-angle-up"></i>
    </button>
</center>
