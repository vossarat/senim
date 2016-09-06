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


        var topslides = document.querySelectorAll('#topslides .topslide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,2000);

        function nextSlide() {
            topslides[currentSlide].className = 'topslide';
            currentSlide = (currentSlide+1)%topslides.length;
            topslides[currentSlide].className = 'topslide showing';
        }


        var playing = true;
        var pauseButton = document.getElementById('pause');

        function pauseSlideshow() {
            pauseButton.innerHTML = 'Play';
            playing = false;
            clearInterval(slideInterval);
        }

        function playSlideshow() {
            pauseButton.innerHTML = 'Pause';
            playing = true;
            slideInterval = setInterval(nextSlide,2000);
        }

        /*topslides.onclick = function() {
        if(playing) {
        pauseSlideshow();
        } else {
        playSlideshow();
        }
        };*/
		
		var top = document.getElementById('topslides');
        top.onmouseover = function() {
            console.log(" мышка тут ");
        }

    });