/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./resize-sensor');
require('./print');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

import printJS from "./print";

import StickySidebar from "sticky-sidebar";

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 50) {
        $("#head-one").addClass("d-none");
        $("#head-two").addClass("d-block fixed-top");
        
        $(".toTop").addClass("active");

    }else{
        $("#head-one").removeClass("d-none");
        $("#head-two").removeClass("d-block fixed-top");
        $(".toTop").removeClass("active");
    }
}); //missing );


// if($('#leftAcordion').length){
//     var sticky = new StickySidebar('#leftAcordion', {
//         topSpacing: 20,
//         resizeSensor: true
//     });
    
//     scrollAuto();
    
//     $(window).resize(function(){
//         scrollAuto();
//     })
// }

$(function(){

    // $('.collapse').on('shown.bs.collapse', function(){
    //     $(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
    //     sticky.updateSticky();
    // }).on('hidden.bs.collapse', function(){
    //     $(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    //     sticky.updateSticky();
    // });

    $('.toTop').click(function(){
        var body = $("html, body");
        body.stop().animate({scrollTop:0}, 500, 'swing');
    })

    $('[data-toggle="tooltip"]').tooltip();

    var anchor = window.location.hash;
    //$(".collapse").collapse('hide');
    $(anchor).collapse('show');

    $('[data-toggle="collapse"]').click(function(){
        var urlPath = $(this).attr('href');
        window.history.pushState({},'',urlPath);
    })

    if($('.sticky-sidebar').length > 0){
        new StickySidebar('.sticky-sidebar', {
            topSpacing: 90,
            resizeSensor: true
        });
    }

    $('.print-btn').click(function(){
        printJS({
            printable: 'content',
            type: 'html',
            ignoreElements: ['hidden-print']
        })
    });

})

// function scrollAuto(){
//     var height = $(window).height() - $('header').height(),
//         length = $('#leftAcordion .list-group-flush').length + 1,
//         perheight = $('#leftAcordion .list-group-colappse').height();

//     $('#leftAcordion .ps-scroll').css({"maxHeight": ((height - (perheight * length)) - 100) +"px"});


//     new PerfectScrollbar('#leftAcordion .ps-scroll');

//     $('#leftAcordion .ps-scroll').animate({
//         'scrollTop': $('#leftAcordion .ps-scroll .current').position().top
//     })
    
//     sticky.updateSticky();
// }

