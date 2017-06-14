// 自定义JS

var navigation_index = null;

var aCollapse = $(".sidebar-collapse > .metismenu > li:not('.nav-header')");

aCollapse.click(function(){
    navigation_index = $(this).index() - 1;
    $.cookie('navigation_index', navigation_index ,{expires:7}); 
});

aCollapse.eq(navigation_index).attr('class','active');






