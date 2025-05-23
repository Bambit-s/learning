// function setupFigureHover() {
//   // Находим основной элемент, где будет меняться изображение
//   const mainFigure = document.querySelector('.figure-first img');
//   // Сохраняем оригинальное изображение
//   const originalSrc = mainFigure.src;

//   // Находим все элементы, при наведении на которые будем менять изображение
//   const hoverFigures = document.querySelectorAll('.figure-other img');

//   // Добавляем обработчики событий для каждого элемента
//   hoverFigures.forEach(figure => {
//     figure.addEventListener('mouseenter', () => {
//       // При наведении меняем src основного изображения на src текущего
//       mainFigure.src = figure.src;
//     });

//     figure.addEventListener('mouseleave', () => {
//       // При уходе возвращаем оригинальное изображение
//       mainFigure.src = originalSrc;
//     });
//   });
// }

// // Вызываем функцию после загрузки DOM
// document.addEventListener('DOMContentLoaded', setupFigureHover);

