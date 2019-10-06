<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
    $(document).ready(function (){
        $(".navbar-toggler").click(function(){
            $(this).toggleClass("icon-rotate");
        });

        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > $('.section-1').height()) {
                $('.menu').addClass('fixed');
                $('#donatebtn').removeClass('d-none');
                $('.navbar-toggler.2').removeClass('d-none');
            } else {
                $('.menu').removeClass('fixed');
                $('#donatebtn').addClass('d-none');
                $('.navbar-toggler.2').addClass('d-none');
            }
        });
        $('#more1').click(function () {
            $('.card-text.1').toggleClass('show-more');
            $('.card-img-top.1').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more2').click(function () {
            $('.card-text.2').toggleClass('show-more');
            $('.card-img-top.2').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more3').click(function () {
            $('.card-text.3').toggleClass('show-more');
            $('.card-img-top.3').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more4').click(function () {
            $('.card-text.4').toggleClass('show-more');
            $('.card-img-top.4').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more5').click(function () {
            $('.card-text.5').toggleClass('show-more');
            $('.card-img-top.5').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more6').click(function () {
            $('.card-text.6').toggleClass('show-more');
            $('.card-img-top.6').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more7').click(function () {
            $('.card-text.7').toggleClass('show-more');
            $('.card-img-top.7').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more8').click(function () {
            $('.card-text.8').toggleClass('show-more');
            $('.card-img-top.8').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more9').click(function () {
            $('.card-text.9').toggleClass('show-more');
            $('.card-img-top.9').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more10').click(function () {
            $('.card-text.10').toggleClass('show-more');
            $('.card-img-top.10').toggleClass('crop-img');
            // $(this).html('Read More..');
        });
        $('#more11').click(function () {
            $('.card-text.11').toggleClass('show-more');
            $('.card-img-top.11').toggleClass('crop-img');
            // $(this).html('Read More..');
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

</script>
</body>
</html>