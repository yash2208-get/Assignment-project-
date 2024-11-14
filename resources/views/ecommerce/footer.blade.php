<section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <h3><a class="logo-footer" href="/">
                            Spry<span class="lohny">S</span>tore</a></h3>
                   
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                        consectetur.Vivamus
                        a ligula quam. Ut blandit eu leo non suscipit. </p>
                    <ul class="social-footerhny mt-lg-5 mt-4">

                        <li><a class="facebook" href="/"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="twitter" href="/"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="google" href="/"><span class="fa fa-google-plus"
                                    aria-hidden="true"></span></a>
                        </li>
                        <li><a class="instagram" href="/"><span class="fa fa-instagram"
                                    aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="right-side col-lg-8 pl-lg-5">
                    
                    <div class="sub-columns">
                        <div class="sub-one-left">
                            <h6>Useful Links</h6>
                            <div class="footer-hny-ul">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/">About</a></li>
                                    <li><a href="/">Blog</a></li>
                                    <li><a href="/">Contact</a></li>
                                </ul>
                                <ul>
                                    <li><a href="/">Careers</a></li>
                                    <li><a href="/">Privacy Policy</a></li>
                                    <li><a href="/">Terms and Conditions</a></li>
                                    <li><a href="/">Support</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="sub-two-right">
                            <h6>Our Store</h6>
                            <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States
                                of America</p>

                            <h6>We accept:</h6>
                            <ul>
                                <li><a class="pay-method" href="/"><span class="fa fa-cc-visa"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="/"><span class="fa fa-cc-mastercard"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="/"><span class="fa fa-cc-paypal"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="/"><span class="fa fa-cc-amex"
                                            aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-section row">
                <div class="columns col-lg-6">
                    <ul class="jst-link">
                        <li><a href="/">Privacy Policy </a> </li>
                        <li><a href="/">Term of Service</a></li>
                        <li><a href="/">Customer Care</a> </li>
                    </ul>
                </div>
                <div class="columns col-lg-6 text-lg-right">
                    <p>© 2024 SpryStore. All rights reserved. Design by <a href=""
                            target="_blank">
                            Yash Maheshwari</a>
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-double-up"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
    <!-- move top -->

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>



<script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8e1e7ca0cbc8e221',t:'MTczMTQ5ODAyNS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/22755d9a86c9/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/30-04-2020/sprystore-liberty-demo_Free/1528800197/web/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 11:40:29 GMT -->

</html>

<script src="user_style/assets/js/jquery-3.3.1.min.js"></script>
<script src="user_style/assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
$(document).ready(function () {
    $(".button-log a").click(function () {
        $(".overlay-login").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay-close1').on('click', function () {
    $(".overlay-login").fadeToggle(200);
    $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
</script>
<!--//login-->
<script>
// optional
$('#customerhnyCarousel').carousel({
    interval: 5000
});
</script>
<!-- cart-js -->
<script src="user_style/assets/js/minicart.js"></script>
<script>
transmitv.render();

transmitv.cart.on('transmitv_checkout', function (evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) { }
    }
});
</script>
<!-- //cart-js -->
<!-- price range (top products) -->
<script src="user_style/assets/js/jquery-ui.js"></script>
<script>
//<![CDATA[ 
$(window).load(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 9000,
        values: [50, 6000],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

}); //]]>
</script>
<!-- //price range (top products) -->
<!-- disable body scroll which navbar is in active -->

<script>
$(function () {
    $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
    })
});
</script>
<!-- disable body scroll which navbar is in active -->
<script src="user_style/assets/js/bootstrap.min.js"></script>