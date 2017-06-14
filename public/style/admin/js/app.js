// 自定义JS

var navigation_index = null;

var aCollapse = $(".sidebar-collapse > .metismenu > li:not('.nav-header')");

aCollapse.click(function(){

    $.cookie('navigation_index',NULL; 
    $.cookie('navigation_index', $(this).index() - 1 ,{expires:1}); 
});

aCollapse.eq( $.cookie('navigation_index') ).attr( 'class' , 'active');



