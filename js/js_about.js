$(document).ready(function() {

        var ppts = document.querySelectorAll('#ppts .ppt');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,5000);


        function nextSlide() {
            ppts[currentSlide].className = 'ppt';
            currentSlide = (currentSlide+1)%ppts.length;
            ppts[currentSlide].className = 'ppt turn_on';
        }

        function goToSlide(n) {
            ppts[currentSlide].className = 'ppt';
            currentSlide = (n+ppts.length)%ppts.length;
            ppts[currentSlide].className = 'ppt turn_on';
        }

        $("#previous").on("click", function() {
                goToSlide(currentSlide-1);
            });
        
        $("#next").on("click", function() {
                goToSlide(currentSlide+1);
            });

    });