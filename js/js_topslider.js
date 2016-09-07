$(document).ready(function() {
        var topslides = document.querySelectorAll('#topslides .topslide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,2000);

        function showNavi() {
            var i;
            var pagi = '0 ';
            for (i = 0; i < topslides.length-1; i++) {
                pagi = pagi + '0 '; 
            }
            return pagi;
        }
        
        document.getElementById("pagi").innerHTML="Hello"       
        
        
        console.log(showNavi('1 '));

        function nextSlide() {
            topslides[currentSlide].className = 'topslide';
            currentSlide = (currentSlide+1)%topslides.length;
            topslides[currentSlide].className = 'topslide showing';
        }

        var top = document.getElementById('topslides');
        top.onmouseover = function() {
            clearInterval(slideInterval);
        }

        top.onmouseout = function() {
            slideInterval = setInterval(nextSlide,2000);
        }
        
        

    });