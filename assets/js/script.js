$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $("#nav").addClass("bg-black");
    } else {
        $("#nav").removeClass("bg-black");
    }
    console.log(scroll);
    });

