<?php
$server = Route::ctrRouteServer();
?>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="<?php echo $server; ?>views/img/template/logo.png">
                        </a>
                    </div>
                    <ul>
                        <li><i class="fa fa-phone"></i> (555) 555-55-55</li>
                        <li><i class="fa fa-envelope"></i> yuppie@support.com</li>
                        <li><i class="fa fa-map-marker"></i> México, Tabasco</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook social-media fb-w" aria-hidden="true"></i></a>
                        <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube-play social-media yt-w" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-media tw-w" aria-hidden="true"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram social-media ig-w" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Información</h5>
                    <ul>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Vender en Yuppie</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Ayuda</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>Soporte Técnico</h5>
                    <ul>
                        <li><a href="#">Yuppie y COVID-19</a></li>
                        <li><a href="#">Devolver Productos</a></li>
                        <li><a href="#">Reemplazar Productos</a></li>
                        <li><a href="#">Servicios</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newsletter-item">
                    <h5>Suscríbete al Newsletter</h5>
                    <p>Reciba por E-mail información sobre nuestra últimos productos y ofertas especiales.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Ingresa tu Email">
                        <button type="button">Suscribirse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        &copy; 2020-<?php echo date('Y'); ?>,Yuppie.com. Todos los Derechos Reservados | Desarrollado por <a href="https://github.com/Sam24Hernandez" target="_blank">Sam Hernández</a> <i class="fa fa-hand-spock-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

