/* CUSTOM SCRIPTS FOR THE TFA THEME */

function toggleMenu() {
    var menu = document.getElementById("menu-wrapper");
    var hamburger = document.getElementById("menu-trigger--hamburger");
    var close = document.getElementById("menu-trigger--close");
    if (menu.classList.contains('menu-closed')) {
        menu.classList.add('menu-open');
        menu.classList.remove('menu-closed');
        hamburger.classList.add('hide');
        hamburger.classList.remove('show');
        close.classList.add('show');
        close.classList.remove('hide');
    } else {
        menu.classList.add('menu-closed');
        menu.classList.remove('menu-open');
        hamburger.classList.add('show');
        hamburger.classList.remove('hide');
        close.classList.add('hide');
        close.classList.remove('show');
    }
}