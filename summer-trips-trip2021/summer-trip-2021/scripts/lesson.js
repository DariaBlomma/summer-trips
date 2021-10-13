'use strict';
const getUserCard = () => JSON.parse(localStorage.getItem('currentUser'));
// выводим только текст для выбранного персонажа
const filterText = () => {
    // большая картинка персонажа
    const playerCard = getUserCard(),
        heroBig = document.querySelector('.hero-big'), 
        index = heroBig.src.lastIndexOf('images/'),
        substr = heroBig.src.substring(index + 7),
        match = substr.match(/.+(?=_big)/);
    let heroName = playerCard.hero.toLowerCase();
    if (heroName === 'dr. stephen strange') {
        heroName = 'dr_strange';
    }
    heroName = heroName.replace(' ', '_');
    heroBig.src = heroBig.src.replace(match, heroName);

    const ifs = document.querySelectorAll('.if'),
        condition = `if-${heroName}`;
    ifs.forEach(item => {
        if (!item.classList.contains(condition)) {
            item.style.display = 'none';
        }
    });
    console.log('condition: ', condition);
    console.log('ifs: ', ifs);
};
filterText();