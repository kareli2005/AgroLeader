window.sliderNext = function (sliderID) {
    const sliderContainer = document.getElementById(sliderID);
    const allProducts = Array.from(sliderContainer.children);
    const itemsPerView = parseInt(sliderContainer.dataset.itemsPerView, 10) || 1;
    let currentIndex = parseInt(sliderContainer.dataset.currentIndex) || 0;

    // Cycle to start if at the end
    currentIndex = (currentIndex + 1) % allProducts.length;

    sliderContainer.dataset.currentIndex = currentIndex;

    const itemWidth = allProducts[0].offsetWidth;
    const gap = parseInt(window.getComputedStyle(sliderContainer).gap) || 0;
    sliderContainer.style.transform = `translateX(${-(currentIndex * (itemWidth + gap))}px)`;
    sliderContainer.style.transition = 'transform 0.3s';
};

window.sliderBack = function (sliderID) {
    const sliderContainer = document.getElementById(sliderID);
    const allProducts = Array.from(sliderContainer.children);
    const itemsPerView = parseInt(sliderContainer.dataset.itemsPerView, 10) || 1;
    let currentIndex = parseInt(sliderContainer.dataset.currentIndex) || 0;

    // Cycle to end if at the start
    currentIndex = (currentIndex - 1 + allProducts.length) % allProducts.length;

    sliderContainer.dataset.currentIndex = currentIndex;

    const itemWidth = allProducts[0].offsetWidth;
    const gap = parseInt(window.getComputedStyle(sliderContainer).gap) || 0;
    sliderContainer.style.transform = `translateX(${-(currentIndex * (itemWidth + gap))}px)`;
    sliderContainer.style.transition = 'transform 0.3s';
};
