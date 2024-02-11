$(document).ready(function(){

    $(".owl-carousel").owlCarousel({
        'margin': 30, 
        'items': 2,
        'loop': true,
        'nav': true,
        // 'center': true,
        'autoWidth': true,
        'navText': [
            '<img src="../images/icon/slider/slider-left.png" alt="" class="arrow arrow_prev"/>', 
            '<img src="../images/icon/slider/slider-left.png" alt="" class="arrow arrow_next"/>'
        ],
        // 'slidesToScroll': 2,

        'responsive': {
            0: {        
                'margin': 10, 
                'items': 1,
                'nav': false,
                'center': true,
                'dots': false,
            },
            768: {
                'items': 2,
            },
            1000: {
                'nav': true,
                'dots': true,        


            }
        }
    });

    const prevNextClass = document.querySelectorAll('.arrow');
    prevNextClass.forEach(item => {
        if (item.closest('.goods')) {
            item.classList.add('arrow_under');
        }   
    })
    starsWrapperGoods = document.querySelectorAll('.goods__stars');

    function setRateOfGoods(array) {

        array.forEach(good => {
            const stars = good.querySelectorAll('.goods__star'),
                  rate = good.getAttribute('data-rate');
            if (!rate) {
                
            }
            stars.forEach(star => {
                if (star.getAttribute('data-rate-value') < rate) {
                    star.style.background = `url('../images/icon/star_active.svg') center center/cover no-repeat`;
                } else {
                    star.style.background = `url('../images/icon/star_not-active.svg') center center/cover no-repeat`;
                }
            })
        })
    }

    setRateOfGoods(starsWrapperGoods);


    const close = document.querySelectorAll('#close'),
          menu = document.querySelector('.menu__wrapper');

    function toggleClass(selector, toggledClass) {
        selector.classList.toggle(toggledClass);
    }

    close.forEach(item => {
        item.addEventListener('click', (e) => {
            if (e.target.closest('.menu__wrapper')) {
                toggleClass(menu, 'menu__wrapper_hidden');
                e.target.classList.toggle('closed');
            }
        })
    })


    // const dots = document.querySelectorAll('.owl-dot');
    // let f = false;
    // dots.forEach(item => {
    //     if (!f) {
    //         item.style.display = 'none';
    //     }
    //     f = !f;
    //     // console.log(item, f)
    // })


  });