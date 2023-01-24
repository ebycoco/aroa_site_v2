$(function() {
    // $('#present').show(1000);
    $('.anime_experte').hover(
        function() {
            $(this).css({
                "background": "#807F7F"
            })
        },
        function() {
            $(this).css({
                "background": "transparent"
            })
        })
    $("#present").animate({
        width: "100%",
        opacity: 0.8,
        transition: '5s',
        marginLeft: "0.8in",
        borderWidth: "10px"
    }, 1500).animate({
        marginLeft: "0in",
    }, 1500);

    $("#present").hover(function() {
        $(this).fadeOut(100);
        $(this).fadeIn(500);
        $(this).css({
            // "background-color": '#C1F0EA',
            "border-radius": "10px",
            "margin": '5px',
            // 'color': '#000'
        })
    })

    var imagepole = $('.imgpole')
    imagepole.addClass('animeimage')
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: false
    })
    .add({
        targets: '.ml2 .letter',
        scale: [6, 1],
        opacity: [0, 1],
        translateZ: 2,
        easing: "easeOutExpo",
        duration: 1950,
        delay: (el, i) => 700 * i
    }).add({
        targets: '.ml2',
        opacity: 1,
        duration: 10000,
        easing: "easeOutExpo",
        delay: 1000
    });