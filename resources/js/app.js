import './bootstrap';

window.setLocale = function (locale) {
    console.log(locale)
    console.log(document.documentElement.lang)
    localStorage.setItem('locale', locale);


    if (locale !== document.documentElement.lang) {
        window.location.href = `/lang/${locale}`;
    }
}

window.openSideBar = function () {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('sidebar-active');
    sidebar.classList.remove('sidebar-hidden');
}

window.closeSideBar = function () {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('sidebar-hidden');
    sidebar.classList.remove('sidebar-active');
}

