var course_delay = 500; // Задержка при смене блока
var course_delay_auto = 5000; // Время показа блока в автоматическом режиме
var course_active = 1; // Текущий активный блок
var course_count = $("#slider div[id^='course']").size(); // Количество блоков
var course_timer = setTimeout("setCourse(0)", course_delay_auto); // Включаем автоматическую смену блоков
$("#switch img").bind("click", function(event) {
        setCourse($(event.target).attr("data-number")); // При клике по переключателю выводим соответствующий блок
    });
function setCourse(number) {
    if (number == course_active) return; // Если выбранный блок и так активен, то выходим из функции
    var temp = course_active; // Сохраняем в temp старый активный блок
    /* Получаем номер следующего активного блока */     if (number == 0) {
        /* Если не был задан конкретный номер */       course_active++;
        if (course_active > course_count) course_active = 1;
    }
    else course_active = number;
    $("#switch img[data-number='" + temp + "']").attr("src", "images/slider_off.png"); // Выключаем "активный" переключатель
    $("#switch img[data-number='" + course_active + "']").attr("src", "images/slider_on.png"); // Включаем новый переключатель
    $("#course_" + course_active).css({opacity: 0.0}).addClass("show").animate({opacity: 1.0}, course_delay); // Выводим новый блок
    $("#course_" + temp).animate({
            opacity: 0.0
        }, course_delay, function () {
            // Прячем старый блок
            clearTimeout(course_timer); // Выключаем таймер
            course_timer = setTimeout("setCourse(0)", course_delay_auto); // Включаем таймер
        }).removeClass("show");
}
