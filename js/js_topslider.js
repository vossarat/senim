$(document).ready(function() {

        var topslides = document.querySelectorAll('#topslides .topslide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,2000);

        var navi = document.querySelectorAll('#navi li');
        /*for (var i = 0; i < topslides.length; i++) {
            navi[i] = '0';
            document.getElementById("navi").innerHTML = navi[i];
        }*/

        //document.getElementById("navi").innerHTML = navi;

		console.log(topslides);

        function nextSlide() {
            topslides[currentSlide].className = 'topslide';
            navi[currentSlide].className = 'navi1';
            currentSlide = (currentSlide+1)%topslides.length;
            navi[currentSlide].className = 'navi';
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