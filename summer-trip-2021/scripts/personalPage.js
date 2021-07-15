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

const  countTimer = deadline => {
    const timerHours = document.querySelector('#timer-hours'),
        timerMinutes = document.querySelector('#timer-minutes'),
        timerSeconds = document.querySelector('#timer-seconds');
    const  currentUser = JSON.parse(localStorage.getItem('currentUser')),
        playerCard = JSON.parse(localStorage.getItem(currentUser));


    function getTimeRemaining() {
        // const dateStop = new Date(deadline).getTime();
        // dateNow = new Date().getTime(),
        const  dateStop = playerCard.dateEnd,
                dateNow = new Date().getTime(),
            timeRemaining = (dateStop - dateNow) / 1000,
            seconds = Math.floor(timeRemaining % 60),
            minutes = Math.floor((timeRemaining / 60) % 60),
            hours = Math.floor(timeRemaining / 60 / 60);
        return { timeRemaining, hours, minutes, seconds };
    }

    function updateClock() {
        const timer = getTimeRemaining();
        const addZero = function(date, tag) {
            if (date < 10) {
                return tag.textContent = `0${date}`;
            } else {
                return tag.textContent = `${date}`;
            }
        };
        addZero(timer.hours, timerHours);
        addZero(timer.minutes, timerMinutes);
        addZero(timer.seconds, timerSeconds);

        if (timer.timeRemaining <= 0) {
            // eslint-disable-next-line no-use-before-define
            clearInterval(idInterval);
            timerHours.textContent = '00';
            timerMinutes.textContent = '00';
            timerSeconds.textContent = '00';
        }
    }
    const idInterval =  setInterval(updateClock, 1000);
};

// countTimer('01 august 2021');
countTimer();

// const sendUserInfo = () => {
//     const currentUser = JSON.parse(localStorage.getItem('currentUser')),
//         personCard = JSON.parse(localStorage.getItem(currentUser)),
//         showError = error => {
//             console.error(error);
//         };

//     const postData = body =>  fetch('./personalPage.php', {
//         method: 'POST',
//         header: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(body)
//     });

//     window.addEventListener('load', () => {
//         const body = {
//             'real_name': personCard.name,
//             'coins': personCard.points,
//             'id': personCard.id,
//             'lesson': 1,
//         };
//         // const body = personCard;
//         console.log(body);

//         postData(body)
//             .then(response => {
//                 if (response.status !== 200) {
//                     throw new Error('network status is not 200');
//                 }
//             })
//             .catch(showError);
//     });
// };

// sendUserInfo();

const changeAvatar = () => {
    const realPhoto = document.querySelector('.real-photo'),
        heroPhoto = document.querySelector('.hero-photo');
        console.log(realPhoto, heroPhoto);
        // дописать класс для аватарки выбранного персонажа
        // заменить в localstorage название карточки игрока на current user,  записывать и выбранного персонажа
};

changeAvatar();