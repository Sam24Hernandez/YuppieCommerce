<?php

$url = Route::ctrRoute();

?>

<!--=====================================
BREADCRUMB SHOPPING CART
======================================-->
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a class="text-uppercase" href="<?php echo $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span class="text-uppercase active-page">Carrito de Compras</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<section class="shopping-cart spad-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sc-content-section">                                
                
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th class="p-name">Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th><i class="fa fa-times fa-2x"></i></th>
                            </tr>
                        </thead>
                        <tbody class="bodyCart">
                            <!-- products item -->
                        </tbody>
                    </table>
                </div>
                <div class="row final-checkout">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="#" class="continue-shop">Continuar comprando</a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Código de Descuento</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Ingresa el código de descuento">
                                <button type="submit" class="site-btn coupon-btn">Aplicar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>$240.00</span></li>
                                <li class="cart-total">Total <span>$240.00</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEDER AL PAGO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

