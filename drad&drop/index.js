'use strict';
// todo: - после сброса элемента в нужную область создать на его предыдущем месте новый элемент. Чтобы можно было вернуть на место слово и пересобрать предложение
// todo: кнопка проверить должна быть неактивна, пока предложение не собрано полностью
// todo: кнопка проверить должна проверять только свою строку
// todo: сохранять в lc
// todo: в одну пустую клетку можно вставить сейчас несколько элементов

// не работает

const renderBackupDropZone = () => {
    const div = document.createComment('div');
    div.className = 'result__item';
    document.querySelector('.box').append(div);
    div.addEventListener('drop', drop_handler);
    div.addEventListener('dragover', dragover_handler);
    div.addEventListener('dragleave', dragleave_handler);
};


function dragstart_handler(ev) {
    const cl = ev.target.classList[ev.target.classList.length - 1];
    // Add the target element's id to the data transfer object
    ev.dataTransfer.setData("text/plain", ev.target.textContent);
    ev.dataTransfer.setData("text/plain", cl);
    ev.dataTransfer.dropEffect = "move";
}

function dragover_handler(ev) {
    ev.preventDefault();
    ev.dataTransfer.dropEffect = "move";
    ev.target.classList.add('is-dragged-over');
}

function dragleave_handler(ev) {
    ev.preventDefault();
    ev.target.classList.remove('is-dragged-over');
}

function drop_handler(ev) {
    ev.preventDefault();
    // Get the id of the target and add the moved element to the target's DOM
    const data = ev.dataTransfer.getData("text/plain");
    const droppedElem = document.querySelector(`.${data}`);
    ev.target.appendChild(droppedElem);
    droppedElem.classList.add('is-dropped');
    ev.target.classList.remove('is-dragged-over');
    renderBackupDropZone();
}

const box__items = document.querySelectorAll('.box__item');

window.addEventListener('DOMContentLoaded', () => {
    box__items.forEach(item => {
        // Add the ondragstart event listener
        item.addEventListener("dragstart", dragstart_handler);
    })
});

const btn = document.querySelector('.check');
btn.addEventListener('click', () => {
    const line1_items = document.querySelectorAll('.line1');
    line1_items.forEach(item => {
        if (item.childNodes[0].textContent.toLowerCase() === item.dataset.answer) {
            item.childNodes[0].classList.add('right');
        } else {
            item.childNodes[0].classList.add('wrong');
        }
    })
})