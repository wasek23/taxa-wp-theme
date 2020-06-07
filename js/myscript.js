$(document).ready(function () {
    // Pagination
    $('.page-numbers').addClass('pagination');
    $('.page-numbers li').addClass('page-item');
    $('.page-numbers li a').addClass('page-link');
    $('.page-numbers li .current').addClass('page-item page-link');

    // Widgets
    // Search
    $('.search_widget form.searchform').addClass('input-group');
    $('.search_widget form.searchform').append('<span class="input-group-btn"><button class="btn btn-default" type="submit"><i class= "lnr lnr-magnifier"></i></button ></span>');

    // Post Category
    $('.post_category_widget .cat-item').addClass('d-flex justify-content-between');

    // Footer
    $('.single-footer-widget').append('<div style="width: 100%; margin: 30px 0;"></div>');

    $('.single-footer-widget .gallery').addClass('instafeed d-flex flex-wrap');
});