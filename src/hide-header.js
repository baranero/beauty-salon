// hide-header.js
document.addEventListener('DOMContentLoaded', (event) => {
    window.onscroll = function() {
        var header = document.querySelector('.site-header');
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 100) {
            header.classList.add('site-header--hidden');
        } else {
            header.classList.remove('site-header--hidden');
        }
    };
});

console.log("OK");
