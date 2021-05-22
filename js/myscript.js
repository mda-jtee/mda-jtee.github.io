function loadMyImage()
{
    $("#myImage").hide();
    $("#myImage").fadeIn(3000);
};


$(document).ready(function(){
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });

});
