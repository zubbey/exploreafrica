<!-- start footer Area -->
<footer class="footer-area pt-4 pb-4">
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Up Coming Campaign</h4>
                    <ul class="list-group list-group-flush">
                        <li class="footer-list"><a href="#">Back to School Support project.</a></li>
                        <li class="footer-list"><a href="#">90 Day free ICT Training for Niger Delta Youths.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Contributors</h4>
                    <ul class="list-group list-group-flush">
                        <li class="footer-list"><a href="#">Somadina Adinma</a></li>
                        <li class="footer-list"><a href="#">Miss Ezinnie Elizabath Umeh</a></li>
                        <li class="footer-list"><a href="#">Mrs Joyce Ernest</a></li>
                        <li class="footer-list"><a href="#">Sunes Godwin</a></li>
                        <li class="footer-list"><a href="#">Abiri Faith Bogobanyu</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Acheivement</h4>
                    <ul class="list-group list-group-flush">
                        <li class="footer-list"><a href="#">Expore Africa Magazine</a></li>
                        <li class="footer-list"><a href="#">Documentary</a></li>
                        <li class="footer-list"><a href="#">Our Community</a></li>
                        <li class="footer-list"><a href="about.php">Testimonies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Stay update with our latest Campaign</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider pt-md-4"></div>
        <div class="footer-bottom row pt-4 pb-4">
            <p class="footer-text m-0 col-lg-6 col-md-12">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="exploreafricafoundation.org"> Explore Africa Foundation </a>Non-Profit Organization. <i class="fa fa-heart-o" aria-hidden="true"></i>  Developed by <a href="https://coloredigital.com" target="_blank">ColoreDigit inc</a> &amp; distributed by <a href="http://www.ibrandafrica.one" target="_blank">iBrand Africa</a></p>
            <div class="col-lg-6 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

</footer>
<!-- End footer Area -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="donate/app.js"></script>

<script>
    $(document).ready(function (){
        $(".navbar-toggler").click(function(){
            $(this).toggleClass("icon-rotate");
        });

        (function( $ ){
            $.fn.checkEx = function () {
                if ($('.bd-example')[0]){
                    $('.nav-link').addClass('text-white');
                }
                return this;
            };
        })(jQuery);

        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > $('.section-1').height()) {
                $('.menu').addClass('fixed');
                $('#donatebtn').removeClass('d-none');
                $('#toggler-nav').removeClass('d-none');
                $('.section-1').checkEx();
            } else {
                $('.menu').removeClass('fixed');
                $('#donatebtn').addClass('d-none');
                $('#toggler-nav').addClass('d-none');
                $('.nav-link').removeClass('text-white');
            }
            if ($(window).scrollTop() > $('.bd-example').height()){
                $('.nav-link').addClass('text-dark');
            } else {
                $('.nav-link').removeClass('text-dark');
            }
        });

        $('#more1').click(function () {
            $('.card-text.1').toggleClass('show-more');
            $('.card-img-top.1').toggleClass('crop-img');
        });
        $('#more2').click(function () {
            $('.card-text.2').toggleClass('show-more');
            $('.card-img-top.2').toggleClass('crop-img');
        });
        $('#more3').click(function () {
            $('.card-text.3').toggleClass('show-more');
            $('.card-img-top.3').toggleClass('crop-img');
        });
        $('#more4').click(function () {
            $('.card-text.4').toggleClass('show-more');
            $('.card-img-top.4').toggleClass('crop-img');
        });
        $('#more5').click(function () {
            $('.card-text.5').toggleClass('show-more');
            $('.card-img-top.5').toggleClass('crop-img');
        });
        $('#more6').click(function () {
            $('.card-text.6').toggleClass('show-more');
            $('.card-img-top.6').toggleClass('crop-img');
        });
        $('#more7').click(function () {
            $('.card-text.7').toggleClass('show-more');
            $('.card-img-top.7').toggleClass('crop-img');
        });
        $('#more8').click(function () {
            $('.card-text.8').toggleClass('show-more');
            $('.card-img-top.8').toggleClass('crop-img');
        });
        $('#more9').click(function () {
            $('.card-text.9').toggleClass('show-more');
            $('.card-img-top.9').toggleClass('crop-img');
        });
        $('#more10').click(function () {
            $('.card-text.10').toggleClass('show-more');
            $('.card-img-top.10').toggleClass('crop-img');
        });
        $('#more11').click(function () {
            $('.card-text.11').toggleClass('show-more');
            $('.card-img-top.11').toggleClass('crop-img');
        });
    });

    function clickedReadmore1() {
        var a = document.getElementById("more1");
        if (a.innerHTML === "Show Less.."){
            a.innerHTML = "Read More..";
        } else {
            a.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore2() {
        var b = document.getElementById("more2");
        if (b.innerHTML === "Show Less.."){
            b.innerHTML = "Read More..";
        } else {
            b.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore3() {
        var c = document.getElementById("more3");
        if (c.innerHTML === "Show Less.."){
            c.innerHTML = "Read More..";
        } else {
            c.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore4() {
        var d = document.getElementById("more4");
        if (d.innerHTML === "Show Less.."){
            d.innerHTML = "Read More..";
        } else {
            d.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore5() {
        var e = document.getElementById("more5");
        if (e.innerHTML === "Show Less.."){
            e.innerHTML = "Read More..";
        } else {
            e.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore6() {
        var f = document.getElementById("more6");
        if (f.innerHTML === "Show Less.."){
            f.innerHTML = "Read More..";
        } else {
            f.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore7() {
        var g = document.getElementById("more7");
        if (g.innerHTML === "Show Less.."){
            g.innerHTML = "Read More..";
        } else {
            g.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore8() {
        var h = document.getElementById("more8");
        if (h.innerHTML === "Show Less.."){
            h.innerHTML = "Read More..";
        } else {
            h.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore9() {
        var i = document.getElementById("more9");
        if (i.innerHTML === "Show Less.."){
            i.innerHTML = "Read More..";
        } else {
            i.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore10() {
        var j = document.getElementById("more10");
        if (j.innerHTML === "Show Less.."){
            j.innerHTML = "Read More..";
        } else {
            j.innerHTML = "Show Less..";
        }
    }
    function clickedReadmore11() {
        var k = document.getElementById("more11");
        if (k.innerHTML === "Show Less.."){
            k.innerHTML = "Read More..";
        } else {
            k.innerHTML = "Show Less..";
        }
    }
    (function($) {
        "use strict";

        // manual carousel controls
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

    })(jQuery);

    // MEDIA QUERY WITH JAVASCRIPT
    $(window).resize(function(){

        if ($(window).width() <= 480) {

            $('.carousel-caption').removeClass('d-none');
            $('.caption-heading').css('font-size', '20px');
            $('.caption-body').css('font-size', '12px');
            $('.caption-body a.button-link').css('font-size', '12px');

        }

    });

    var l = window.location.href;
    var home = 'http://www.exploreafricafoundation.org/index.php';
    var work = 'http://www.exploreafricafoundation.org/work.php';
    var about = 'http://www.exploreafricafoundation.org/about.php';
    var login = 'http://www.exploreafricafoundation.org/login.php';

    let nav1 = document.querySelector('#nav1');
    let nav2 = document.querySelector('#nav2');
    let nav3 = document.querySelector('#nav3');
    let nav4 = document.querySelector('#nav4');
    if (l === home || l === 'http://www.exploreafricafoundation.org/' || l === 'http://www.exploreafricafoundation.org') {
        nav1.classList.add('active');
        nav2.classList.remove('active');
        nav3.classList.remove('active');
        nav4.classList.remove('active');
    } else if (l === work){
        nav2.classList.add('active');
        nav1.classList.remove('active');
        nav3.classList.remove('active');
        nav4.classList.remove('active');
    } else if (l === about){
        nav3.classList.add('active');
        nav1.classList.remove('active');
        nav2.classList.remove('active');
        nav4.classList.remove('active');
    } else if (l === login){
        nav4.classList.add('active');
        nav1.classList.remove('active');
        nav2.classList.remove('active');
        nav3.classList.remove('active');
    } else{
        nav1.classList.remove('active');
        nav2.classList.remove('active');
        nav3.classList.remove('active');
        nav4.classList.remove('active');
    }

    function addActive2() {
        $('.signup').addClass('active');
        $('.login').removeClass('active');
    }
    function addActive1() {
        $('.signup').removeClass('active');
        $('.login').addClass('active');
    }

</script>

<script>
    $(document).ready(function() {

        $('#modal').on('click', function(){
            $(this).fadeOut('500');
        });
    });

    function paystack(){
        // alert("function call after submition");
        payWithPaystack();
        return false;
    }

    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_live_bbbe431c147094b3ef0a4cbd5721831bd4850bc1',
            email: '<?php echo $emailAddress;?>',
            amount: <?php echo $S_amount;?> * 100,
            currency: 'NGN',
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function(response){
                var res = 'success. transaction reference code is ' + response.reference;
                paymentSuccess(res);
            },
            onClose: function(){
                // alert('window closed');
            }
        });
        handler.openIframe();
    }
    
    function paymentSuccess(response){
        window.location.href = "/?payment=true&reference=" + response;
    }
    
    function cancelPayment(){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'No, continue!',
            cancelButtonText: 'Yes, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                payWithPaystack();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Thank you! God bless you :)',
                    'error'
                )
            }
        });
    }
    
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }
    
    //################# CHECK URL PARAM FUNCTION ##################
    function queryParameters () {
        var result = {};
        var params = window.location.search.split(/\?|\&/);
        params.forEach( function(it) {
            if (it) {
                var param = it.split("=");
                result[param[0]] = param[1];
            }
        });
        return result;
    }
    if (queryParameters().payment === "true"){
        
        let res = getUrlVars()["reference"];
        
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Thank you for supporting Explore Africa Foundation!',
          text: res,
          showConfirmButton: false,
          timer: 1500
        })
    }

    $("button[type='submit']").click(function () {
        $('.loading').removeClass('d-none');
        // alert('button clicked!');
    })

    $('#blogCarousel').carousel({
        interval: 5000
    });
   

</script>

</body>
</html>
