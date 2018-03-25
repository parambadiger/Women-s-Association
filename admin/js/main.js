let navItems= ['#update_sliders', '#update_events', '#update_news', '#update_gallery', '#update_about'];
function handleNavigation(e) {
    var id =(e.target.getAttribute('data-value'))
    navItems.map(function(item) {
        if(id === item ) {
            $(item).addClass("active");
        }
        else {
        $(item).removeClass("active");
        }
    })
}