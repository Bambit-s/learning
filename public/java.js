const items = document.getElementsByClassName('buskar');
console.log(items);
function initSlider(container) {
    const slides = Array.from(container.children);
    let currentSlide = 0;
    const SLIDE_DELAY = (Math.floor(Math.random() * 10000) + 1000);

    if (slides.length === 0) return;

    function showNextSlide() {
        slides[currentSlide].classList.remove('active');

        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add('active');

        setTimeout(showNextSlide, SLIDE_DELAY);
    }

    slides[0].classList.add('active');

    setTimeout(showNextSlide, SLIDE_DELAY);
}

Array.from(items).forEach(container => {
    initSlider(container);
});


document.addEventListener('DOMContentLoaded', function () {
    const mainFigure = document.querySelector('.figure-first img');
    const originalSrc = mainFigure.src;
    const scrollingContainer = document.querySelector('.figure-scrolling');
    const upBtn = document.querySelector('.up-btn');
    const downBtn = document.querySelector('.down-btn');

    // Обработчики для смены изображения при наведении
    document.querySelectorAll('.figure-other img').forEach(figure => {
        figure.addEventListener('mouseenter', () => {
            mainFigure.src = figure.src;
        });

        figure.addEventListener('mouseleave', () => {
            mainFigure.src = originalSrc;
        });

        figure.addEventListener('click', () => {
            originalSrc = figure.src;
            mainFigure.src = figure.src;
        });
    });

    // Функции для кнопок прокрутки
    function updateButtons() {
        if (window.innerWidth < 768) {
            // Горизонтальный скролл для мобильных
            upBtn.disabled = scrollingContainer.scrollLeft <= 0;
            downBtn.disabled = scrollingContainer.scrollLeft + scrollingContainer.clientWidth >= scrollingContainer.scrollWidth;
        } else {
            // Вертикальный скролл для десктопов
            upBtn.disabled = scrollingContainer.scrollTop === 0;
            downBtn.disabled = scrollingContainer.scrollTop + scrollingContainer.clientHeight >= scrollingContainer.scrollHeight;
        }
    }

    function handleScroll(direction) {
        if (window.innerWidth < 768) {
            // Горизонтальный скролл
            scrollingContainer.scrollBy({
                left: direction === 'up' ? -100 : 100,
                behavior: 'smooth'
            });
        } else {
            // Вертикальный скролл
            scrollingContainer.scrollBy({
                top: direction === 'up' ? -100 : 100,
                behavior: 'smooth'
            });
        }
    }

    // Удаляем старые обработчики, если они были
    upBtn.removeEventListener('click', handleScroll);
    downBtn.removeEventListener('click', handleScroll);

    // Добавляем новые обработчики
    upBtn.addEventListener('click', () => handleScroll('up'));
    downBtn.addEventListener('click', () => handleScroll('down'));

    scrollingContainer.addEventListener('scroll', updateButtons);
    window.addEventListener('resize', function () {
        updateButtons();
        // Дополнительные действия при ресайзе, если нужно
    });

    // Инициализация кнопок
    updateButtons();
});
