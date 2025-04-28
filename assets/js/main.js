window.onscroll = function (e) {    
    const yPosition = window.scrollY;
    const navSecondary = document.getElementById('nav');
    if (yPosition > 778) {
        navSecondary.style.opacity = 1;
    } else {
        navSecondary.style.opacity = 0;

    }
};
