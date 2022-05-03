$(".btn-menu").click(function () {
    $(".m-mobile").removeClass('d-none');
    $(".m-mobile").animate({
        width: "100%",
        opacity: 1,
    }, 1500);
});
$(".btn-close").click(function () {
    $(".m-mobile").animate({
        width: "0%",
        opacity: 0,
    }, 500);
    $(".m-mobile").addClass('d-none');
});
