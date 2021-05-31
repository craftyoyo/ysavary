$('.powered-by_5TP-I').hide()
function showCv() {
    window.open("https://ysavary.fr/CV_Yoan_Savary.pdf", width = 250, height = 300)
}

function fade(n) {
    n.fadeIn(1e3).delay(3e3).fadeOut(1e3, function () {
        var n = $(this).next(".quote");
        fade(n.length > 0 ? n : $(this).parent().children().first())
    })
}
$(function () {
    $("form").on("submit", function (n) {
        n.preventDefault(), $.ajax({
            type: "post",
            url: "mail.php",
            data: $("form").serialize(),
            success: function (code_html) {

                $('#ok').hide();
                $('#nok').hide();
                $('#robot').hide();

                switch(code_html) {
                    case 'OK':
                        $("#ok").show(), $("form").clearForm()
                        break;
                    case 'NOK':
                         $("#nok").show(), $("form").clearForm()
                        break;
                    case 'ROBOT':
                        $("#robot").show(), $("form").clearForm()
                        break;
                    default:
                        $("#robot").show(), $("form").clearForm()
                        break;

                }
            }
        })
    })
}), fade($(".quoteLoop > .quote").first()), $(window).scroll(function () {
    $(window).scrollTop() > 300 ? $(".main_nav").addClass("sticky") : $(".main_nav").removeClass("sticky")
}), $(".mobile-toggle").click(function () {
    $(".main_nav").hasClass("open-nav") ? $(".main_nav").removeClass("open-nav") : $(".main_nav").addClass("open-nav")
}), $(".main_nav li a").click(function () {
    $(".main_nav").hasClass("open-nav") && ($(".navigation").removeClass("open-nav"), $(".main_nav").removeClass("open-nav"))
}), jQuery(document).ready(function (n) {
    n(".smoothscroll").on("click", function (a) {
        a.preventDefault();
        var o = this.hash,
            e = n(o);
        n("html, body").stop().animate({
            scrollTop: e.offset().top
        }, 800, "swing", function () {
            window.location.hash = o
        })
    })
}), TweenMax.staggerFrom(".heading", .8, {
    opacity: 0,
    y: 20,
    delay: .2
}, .4);