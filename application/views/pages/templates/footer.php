<?php

?>
<!-- Contato -->
<div class="address" id="contact">
    <div class="container">
        <h3 class="title">Entre em Contato</h3>
        <div class="address-row">
            <div class="col-md-6 col-xs-6 address-right">
                <div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
                    <h4>Endereço</h4>
                    <p>Av. carlos Lindemberg, nº 2005, Vila Velha - ES.</p>
                </div>
                <div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
                    <h4>Telefone </h4>
                    <p>(27) 3289 2210</p>
                </div>
                <div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
                    <h4>E-mail</h4>
                    <p>
                        <a href="mailto:vendas@marmoraria-es.com.br"> vendas@marmoraria-es.com.br</a>
                    </p>

                </div>
            </div>
            <div class="col-md-6 col-xs-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
                <div class="address-grid">
                    <h4 class="wow fadeIndown animated" data-wow-delay=".5s">Fale Conosco</h4>
                    <form action="#" method="post">
                        <input type="text" placeholder="Nome" name="name" required="">
                        <input type="email" placeholder="E-mail" name="email" required="">
                        <input type="text" placeholder="Assunto" name="subject" required="">
                        <textarea placeholder="Mensagem" required=""></textarea>
                        <input type="submit" value="ENVIAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//contact-->

<!-- footer -->
<footer>
    <div class="w3ls-footer-grids">
        <div class="container">
            <div class="col-md-4 w3l-footer one">
                <h2>In Home</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 w3l-footer two">
                <h3>Redes Sociais</h3>
                <ul>
                    <li>
                        <a class="fb" href="#">
                            <i class="fa fa-facebook"></i>Curta nossa página no Facebook</a>
                    </li>
                    <li>
                        <a class="fb4" href="#">
                            <i class="fa fa-instagram"></i>Siga nos no Instagram</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 w3l-footer three">
                <h3>Address</h3>
                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <p>The company name
                            <span>Av. carlos Lindemberg</span>nº 2005, Vila Velha - ES. </p>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <p>(27) 3289 2210</p>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:info@example.com">mail@example.com</a>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div class="copy-right-grids">
        <p class="footer-gd">© 2020 Marmoraria Roma. Todos os Direitos Reservados | Desenvolvido com <i class="fa fa-heart"></i> por
            <a href="https://ee2x.com.br/" target="_blank">EE2X</a>

    </div>
</footer>
<!-- //footer -->


<!-- js files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>

<!--gallery -->
<script src="js/jquery.chocolat.js"></script>
<!--light-box-files -->
<script>
    $(function() {
        $('.gallery-grid1 a').Chocolat();
    });
</script>
<!-- //gallery -->

<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
    $(document).ready(function() {

        $('.skillbar').skillBars({
            from: 0,
            speed: 4000,
            interval: 100,
            decimals: 0,
        });

    });
</script>
<!-- //skills -->

<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function() {
        /*
        var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- //js-files -->

</body>

</html>
