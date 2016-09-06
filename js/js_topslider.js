$(document).ready(function() {
        /*        $("#topslider").on("click", function(){
        alert("!!!");
        });


        var slideWidth=1000;
        var sliderTimer;
        $(function(){
        $('.slidewrapper').width($('.slidewrapper').children().size()*slideWidth);
        sliderTimer=setInterval(nextSlide,3000);
        $('.viewport').hover(function(){
        clearInterval(sliderTimer);
        },function(){
        sliderTimer=setInterval(nextSlide,3000);
        });
        });

        function nextSlide(){
        var currentSlide=parseInt($('.slidewrapper').data('current'));
        currentSlide++;
        if(currentSlide>=$('.slidewrapper').children().size())
        {
        currentSlide=0;
        }
        $('.slidewrapper').animate({left: - currentSlide*slideWidth},300).data('current',currentSlide);
        }*/
        
        
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,2000);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide+1)%slides.length;
            slides[currentSlide].className = 'slide showing';
        }

    });