const countTotal = () => {
    const total = document.querySelector('.sum'),
        toCounts = document.querySelectorAll('.to-count');
    let sum = 0;
    toCounts.forEach(item => {
        sum += Number(item.textContent);
    });
    total.textContent = sum;
};
countTotal();

const writeUser = () => {
    const name = document.querySelector('.real-name'),
        hero = document.querySelector('.hero-name'),
        currentUser = JSON.parse(localStorage.getItem('currentUser')),
        playerCard = JSON.parse(localStorage.getItem(currentUser));

    name.textContent = currentUser;
    hero.textContent = playerCard.hero;
};
writeUser();
