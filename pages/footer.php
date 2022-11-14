<!--footer section-->
<footer class="bg-footer-color font-size-footer position-relative" id="contact">
    <section class="position-relative">
        <div class="row py-5">
            <div class="col-md-4 ps-5">
                <h3 class="fw-bold text-color pb-2">Get In Touch</h3>
                <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i>KH-198, Goni Road, Middle Badda, Dhaka-1216, Bangladesh</p>
                <p class="text-white"><i class="fa fa-phone-alt me-2"></i>+8801601845222</p>
                <p class="text-white"><i class="fa fa-envelope me-2"></i>info@sportsnews.com</p>
                <div class="border-0 m-0 p-0">
                    <ul class="nav p-0  border-0">
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands  fa-facebook-f circle-icon-b-facebook"></i></a></li>
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands fa-twitter  circle-icon-b"></i></a></li>
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands fa-linkedin-in  circle-icon-b"></i></a></li>
                        <li class=""><a href="" class="p-0"><i class="text-white fa-brands fa-instagram  circle-icon-b"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="text-color fw-bold pb-2">Quick Links</h3>
                <ul class="navbar-nav text-white">
                    <li><a href="" class="nav-link pt-0 pb-1">Home</a></li>
                    <li><a href="" class="nav-link pt-0 pb-1">Cricket</a></li>
                    <li><a href="" class="nav-link pt-0 pb-1">Football</a></li>
                    <li><a href="" class="nav-link py-1">About Us</a></li>
                    <li><a href="" class="nav-link py-1">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-5 pe-5">
                <h3 class="text-color fw-bold pb-2">Newsletter</h3>
                <p class=" text-white pt-0">This newsletter signup example from SOPRTSNEWS doesn’t bombard a guest with
                    too much information. It also maintains consistent branding (an important newsletter signup best practice),
                    and clearly explains how someone would benefit from signing up</p>
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="Enter your email" >
                    <button type="button" class="btn btn-sm text-white bg-signup-color rounded-0">SIGN UP</button>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="row pb-5">
            <hr/>
            <div class="col-md-7 px-5">
                <span class="float-start text-white ">©</span><span class="text-color float-start">sportsnews.com.</span><span class="fw-bold text-white float-start"> All Rights Reserved. Designed by </span><a href="" class="nav-link float-start text-color">BITM Codex</a>
            </div>
            <div class="col-md-5 px-5 py-0">
                <div class="navbar navbar-expand py-0">
                    <ul class="navbar-nav  ms-0 fw-bold py-0">
                        <li><a href="" class="nav-link text-white py-0">Privacy</a></li>
                        <li><a href="" class="nav-link text-white py-0"> Terms</a></li>
                        <li><a href="" class="nav-link text-white py-0">FAQs</a></li>
                        <li><a href="" class="nav-link text-white py-0">Help</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>

<!--back to top-->
<button onclick="topFunction()" id="backToTopBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $(function() {
        // Owl Carousel
        var owl = $("#banner-owl-demo");
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 1000,
            animateOut: "slideOutDown",
            animateIn: "slideInDown",
        });
    });

</script>

<script>
    $(document).ready(function() {
        // $(".owl-carousel").owlCarousel();
        $("#owl-demo").owlCarousel({

            autoPlay: 2000, //Set AutoPlay to 3 seconds
            // //Autoplay
            // autoPlay : true,
            // goToFirst : true,
            // goToFirstSpeed : 1000,

            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    // nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1050:{
                    items:3,
                    // nav:true,
                    loop:false
                }
            }

        });

    });
</script>

<!--back to top-->
<script>
    // Get the button
    let mybutton = document.getElementById("backToTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>