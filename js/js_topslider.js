$(document).ready(function() {

        var topslides = document.querySelectorAll('#topslides .topslide');
        var currentSlide = 0;
        var top = document.getElementById('topslides');
        var slideInterval = setInterval(nextSlide,5000);


        var navi = document.getElementById('navi');
        for( var i=0; i<navi.children.length; i++ ) {
            navi.children[i].className = 'turnoff';
            navi.children[i].onclick = function(x) {
                return function() {
                    goToSlide(x);
                }
            }(i);
        }

        navi.children[0].className = 'turnon';

        function nextSlide() {
            topslides[currentSlide].className = 'topslide';
            navi.children[currentSlide].className = 'turnoff';
            currentSlide = (currentSlide+1)%topslides.length;
            navi.children[currentSlide].className = 'turnon';
            topslides[currentSlide].className = 'topslide showing';
        }

        function goToSlide(n) {
            topslides[currentSlide].className = 'topslide';
            navi.children[currentSlide].className = 'turnoff';
            currentSlide = (n+topslides.length)%topslides.length;
            navi.children[currentSlide].className = 'turnon';
            topslides[currentSlide].className = 'topslide showing';
        }

        top.onmouseover = function() {
            clearInterval(slideInterval);
        }

        top.onmouseout = function() {
            slideInterval = setInterval(nextSlide,5000);
        }


    });