/**
 * Created by sina on 2015/11/11.
 */
jQuery(document).ready(function() {
    //Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    Login.init();
    Demo.init();
    // init background slide images
    $.backstretch([
            "http://blog.zhengdingzx.com/css/img/bg/1.jpg",
            "http://blog.zhengdingzx.com/css/img/bg/2.jpg",
            "http://blog.zhengdingzx.com/css/img/bg/3.jpg",
            "http://blog.zhengdingzx.com/css/img/bg/4.jpg"
        ], {
            fade: 1000,
            duration: 8000
        }
    );
});