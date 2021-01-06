<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12 ">
                    <div class="footer-box">
                        <div class="headinga">
                            <h3>Address</h3>
                            <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                            <p>(+71) 8522369417
                                <br>ramafaris27@gmail.com</p>
                        </div>

                        <div class="menu-bottom">
                            <ul class="link">
                                <li> <a href="{{route('home')}}">Home</a></li>
                                <li> <a href="{{route('aboutus')}}">About Us</a></li>
                                <li> <a href="{{route('contact')}}">Contact Us</a></li>
                                <li> <a href="{{route('faq')}}">FAQ</a></li>
                                <li> <a href="{{route('references')}}">References</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2021 All Rights Reserved. Design By <i>Rama Faris</i></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-3.0.0.min.js"></script>
<script src="{{asset('assets')}}/js/plugin.js"></script>
<!-- sidebar -->
<script src="{{asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
<!-- javascript -->
<script src="{{asset('assets')}}/js/owl.carousel.js"></script>
<script src="{{asset('assets')}}/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
