

// fullcalendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 500
    });
    calendar.render();
});

$(document).ready(function() {
    $("#toggle_menu").click(function(){
        $("#layout-wrapper").toggleClass("expand");
    });


    $(".quick-menus").click(function(){
        $(".quick-menus").removeClass("active");
        $(".quick-dropmenu").removeClass("active");

        var id = $(this).data("id");
        $(this).addClass("active");
        $(id).addClass("active");

        $("#overlay-popup").show();
        //console.log(id);

    });

    $("#overlay-popup").click(function(){
        $(this).hide();
        $(".quick-menus").removeClass("active");
        $(".quick-dropmenu").removeClass("active");
    });

    $("#mobile_toggle_menu").click(function(){
        $("#layout-wrapper").toggleClass("mobile-expand");
    });

});

