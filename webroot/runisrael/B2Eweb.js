$(function () {
  
    $('.b2eTimer').each(function () {
        var ctrl = $(this);
        var dday = ctrl.attr("data-dday");
        ctrl.countdown({ until: new Date(dday) });
    });

});