window.onload = function() {
    $(".fa-close").click(function () {
        $('div.alert').remove();
    });

    $(".navbar-header .navbar-toggle").click(function () {
        $('div.nav-collapse-toggle').toggleClass('in');
    });

    $('li.dropdown-avatar').click(function(){
       $(this).toggleClass('open');
    });
    $('li.newTopic').click(function(){
        $(this).toggleClass('open');
    });
}