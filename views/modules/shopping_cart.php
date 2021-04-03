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
                                <th>SubTotal</th>
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
                            <a href="<?php echo $url; ?>" class="continue-shop">Continuar comprando</a>
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
                                <li class="subtotal sumSubtotal"></li>
                                <li class="cart-total"></li>
                            </ul>
                            <?php
                            if (isset($_SESSION["validateSession"])) {

                                if ($_SESSION["validateSession"] == "ok") {

                                    echo '<a id="btnCheckout" href="#paymentCheckout" data-toggle="modal" idUser="' . $_SESSION["id"] . '" class="proceed-btn">PROCEDER AL PAGO</a>';
                                }
                            } else {
                                echo '<a id="btnCheckout" href="#modalLogin" data-toggle="modal" class="proceed-btn">PROCEDER AL PAGO</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade modalForm" id="paymentCheckout" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title login-modal-title">Proceder al Pago</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            

            <div class="modal-body ">
                <div class="contentCheckout">
                    <?php
                    echo ' <input type="hidden" id="rateTax" value="">
                                <input type="hidden" id="nationalShipping" value="">
                                <input type="hidden" id="minimumNationalRate" value="">
                                <input type="hidden" id="countryRate" value="">';
                    ?>

                    <div class="formDelivery row">
                        <h4 class="text-center well text-uppercase">Información del envío</h4>

                        <div class="col-lg-12 selectState">
                            
                        </div>
                    </div>

                    <div class="formPayment row">

                        <h4 class="text-center well text-uppercase">Método de pago</h4>

                        <figure class="col-lg-12 methodPayment">

                            <center>
                                <input id="checkPaypal" type="radio" name="payment" checked>
                            </center>


                            <center>
                                <img src="<?php echo $server; ?>views/img/template/paypal.jpg" class="img-thumbnail">
                            </center>
                        </figure>

                    </div>
                    <br>
                    <div class="listProducts row">
                        <h4 class="text-center well text-uppercase">Tu Pedido</h4>
                        <table class="table table-striped tableProducts order-table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                        <div class="col-sm-6 col-md-12 pull-right">
                            <table class="table table-striped tableRate">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td><span class="defaultCurrency">MXN</span> $<span class="valueSubtotal" valueTotal="0">0</span></td>                                        
                                    </tr>
                                    <tr>
                                        <td>Envío</td>
                                        <td><span class="defaultCurrency">MXN</span> $<span class="valueTotalDelivery" valueTotal="0">0</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Impuesto</td>
                                        <td><span class="defaultCurrency">MXN</span> $<span class="valueTotalTax" valueTotal="0">0</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td><strong><span class="defaultCurrency">MXN</span> $<span class="valueTotalShopping" valueTotal="0">0</span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="currency">
                                <select class="form-control" id="defaultCurrency" name="currency">
                                    <option value="MXN">MXN</option>
                                </select>
                            </div>                                                                                    
                        </div>
                        <div class="clearfix"></div>
                        <button class="btn btn-block btn-lg btn-success btnPay">PAGAR</button>
                    </div>

                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

