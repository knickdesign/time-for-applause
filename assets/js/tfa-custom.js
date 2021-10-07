/* CUSTOM SCRIPTS FOR THE TFA THEME */

function toggleMenu() {
    var menu = document.getElementById("menu-wrapper");
    if (menu.classList.contains('menu-closed')) {
        menu.classList.add('menu-open');
        menu.classList.remove('menu-closed');
    } else {
        menu.classList.add('menu-closed');
        menu.classList.remove('menu-open');
    }
}