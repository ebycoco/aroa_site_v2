$(function(){
    var tm_content = $('.tm-content')

    var tmSideBar = $('#tmSideBar')

    tm_content.on('click', function(){
        tmSideBar.removeClass('show')
        btnlogo.removeClass('logotoggle')
    })
    var btnlogo = $('.btn')
    var tmMainNavToggle = $('#tmMainNavToggle')
    tmMainNavToggle.on('click', function(){
        btnlogo.toggleClass('logotoggle')
    })
})