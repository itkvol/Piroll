$(function () {


    // =====================Skills section=================

    // UI/UX Design
    function design(a) {

        var skillsDesignNum = $('#skills-design-num');
        skillsDesignNum.html(a);

        var skillsDesign = $('#skills-design');
        skillsDesign.css("width", a + "%");
    };

    design(75);

    // Web Development
    function development(b) {
        var skillsDevelopmentNum = $('#skills-development-num');
        skillsDevelopmentNum.html(b);

        var skillsDevelopment = $('#skills-development');
        skillsDevelopment.css("width", b + "%");
    };

    development(90);

    // Marketing
    function marketing(c) {
        var skillsMarketingNum = $('#skills-marketing-num');
        skillsMarketingNum.html(c);

        var skillsMarketing = $('#skills-marketing');
        skillsMarketing.css("width", c + "%");
    };

    marketing(65);

    // ========================Numbers section========================

    // Projects compared
    function numbersProjects(pr) {
        var projects = $("#numbers-projects");
        projects.html(pr);
    };

    numbersProjects(548);

    // Working hours
    function numbersHours(hr) {
        var hours = $("#numbers-hours");
        hours.html(hr);
    };

    numbersHours(1465);

    // Positive feedback
    function numbersFeedbacks(fb) {
        var feedbacks = $("#numbers-feedbacks");
        feedbacks.html(fb);
    };

    numbersFeedbacks(614);

    // Happy clients
    function numbersClients(cl) {
        var clients = $("#numbers-clients");
        clients.html(cl);
    };

    numbersClients(735);



    // =========================Work section=======================

    var filtersList = $(".work-image-filter");


    for (var i = 0; i < filtersList.length; i++) {
        $(filtersList[i]).on("click", showImage);
    };

    var showOnlyImage = $('#image');

    function showImage() {
        $("#dark").show();
        $("#image").show();
        var clickedImage = $(this).closest(".work-image")[0].style.background;
        console.log(clickedImage);
        showOnlyImage.css("background", clickedImage);
    };

    $('#dark').on("click", hideImage);

    function hideImage() {
        $("#dark").hide();
        $("#image").hide();
    };


    // =====================Work process section========================

    $(".video-cover>img").on("click", hideVideoCover);

    function hideVideoCover() {
        $('.video-cover').hide();
    };


    // =================Testimonials slick slider section================

    $('.slick-slider-autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
      });


});

