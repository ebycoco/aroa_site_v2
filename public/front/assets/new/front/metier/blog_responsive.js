$(function() {
    var screen = $(window).width()
    var blockslider = $('.blockslider')
    var book = $('.book')
    if (screen <= 768) {
        book.hide()
        blockslider.show()
        let img_slider = document.getElementsByClassName('img_slider');
        let etape = 0;
        let nbr_img = img_slider.length;

        let precedent = document.querySelector('.precedent')
        let suivant = document.querySelector('.suivant')

        function removeActive() {
            for (let i = 0; i < img_slider.length; i++) {
                img_slider[i].classList.remove('actived');
                img_slider[i].classList.remove('activeg');

            }
        }

        suivant.addEventListener('click', () => {
            etape++;
            if (etape >= nbr_img) {
                etape = 0;
            }
            removeActive();
            img_slider[etape].classList.add('actived');
        })

        precedent.addEventListener('click', () => {
            etape--;
            if (etape < 0) {
                etape = nbr_img - 1;
            }
            removeActive();
            img_slider[etape].classList.add('activeg');
        })

        // setInterval(() => {
        //     etape++;
        //     if (etape >= nbr_img) {
        //         etape = 0;
        //     }
        //     removeActive();
        //     img_slider[etape].classList.add('active');
        // }, 5000);
    }else{
        book.show()
        blockslider.hide()
    }
});