import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap'
import '../css/app.css'
import '../css/header.css'
import '../css/searchbar.css'
import '../css/sidebar.css'
import '../css/carousel.css'
import '../css/slider.css'
import '../css/utils.css'

import './slider.js'

window.setLocale = function (locale) {
    console.log(locale)
    console.log(document.documentElement.lang)
    localStorage.setItem('locale', locale);


    if (locale !== document.documentElement.lang) {
        window.location.href = `/lang/${locale}`;
    }
}

window.openSideBar = function () {
    const sidebar = document.getElementById('sidebar');
    const sidebarBg = document.getElementById('sidebarBackground');

    sidebar.classList.add('sidebar-active');
    sidebar.classList.remove('sidebar-hidden');
    if (sidebar.classList.contains('sidebar-active')) {
        sidebarBg.classList.remove('hidden');
    } else {
        sidebarBg.classList.add('hidden')
    }
}

window.closeSideBar = function () {
    const sidebar = document.getElementById('sidebar');
    const sidebarBg = document.getElementById('sidebarBackground');

    sidebar.classList.add('sidebar-hidden');
    sidebar.classList.remove('sidebar-active');
    if (sidebar.classList.contains('sidebar-active')) {
        sidebarBg.classList.remove('hidden');
    } else {
        sidebarBg.classList.add('hidden')
    }
}

