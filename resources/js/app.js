import './bootstrap';

window.setLocale = function (locale) {
    console.log(locale)
    console.log(document.documentElement.lang)
    localStorage.setItem('locale', locale);


    if (locale !== document.documentElement.lang) {
        window.location.href = `/lang/${locale}`;
    }
}
