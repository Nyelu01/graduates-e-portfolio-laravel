document.addEventListener('DOMContentLoaded', function () {
    const currentUrl = window.location.href;
    const navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(item => {
        const navLink = item.querySelector('.nav-link');
        if (currentUrl.includes(navLink.getAttribute('href'))) {
            item.classList.add('active');
            navLink.classList.add('active');
        }

        item.addEventListener('click', function () {
            navItems.forEach(navItem => {
                navItem.classList.remove('active');
                navItem.querySelector('.nav-link').classList.remove('active');
            });
            this.classList.add('active');
            this.querySelector('.nav-link').classList.add('active');
        });
    });
});
