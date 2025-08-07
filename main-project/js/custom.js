$(document).ready(function (){
    $('#header').load('global/header.html');
    $('#footer').load('global/footer.html');
});
// intro slider
$(document).ready(function(){
    if ($('body').is('#home')){
        console.log('Home page slider initialized');
        const $sliderImages = $('.slider-1 img');
        let current = 0;
        $sliderImages.eq(current).addClass('active');

        setInterval(function() {
            $sliderImages.eq(current).removeClass('active');
            current = (current + 1) % $sliderImages.length;
            $sliderImages.eq(current).addClass('active');

        }, 5000);
    }
});
// Arrow scroller bottom home page
$(document).ready(function (){
    const $slider = $('.slider-2');
    const $images = $slider.find('img');
    const imgWidth = $images.first().outerWidth(true);
    let currentIndex = 0;

    $('.slider-button-next').on('click', function (){
        if (currentIndex < $images.length - 1){
            currentIndex++;
            $slider.css('transform', `translateX(-${imgWidth * currentIndex}px)`);
        }
    });
    $('.slider-button-prev').on('click', function (){
        if (currentIndex > 0) {
            currentIndex--;
            $slider.css('transform', `translateX(-${imgWidth * currentIndex}px)`);
        }
    });
})
// product pages reusable slider
$(document).ready(function (){
    const $slider = $('.product-slider');
    const $images = $slider.find('img');
    const imgWidth = $images.first().outerWidth(true);
    let currentIndex = 0;

    $('.product-slider-wrapper .slider-button-next').on('click', function(){
        if (currentIndex < $images.length - 1){
            currentIndex++;
            $slider.css('transform', `translateX(-${imgWidth * currentIndex}px)`);
        }
    });
    $('.product-slider-wrapper .slider-button-prev').on('click', function(){
        if (currentIndex > 0){
            currentIndex--;
            $slider.css('transform', `translateX(-${imgWidth * currentIndex}px)`);
        }
    });
});


