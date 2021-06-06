document.addEventListener('DOMContentLoaded', () =>  {
    //jquery for select
    $(() => {
        $('select').selectric({
            disableOnMobile: false,
            nativeOnMobile: false
        });
    });
// localStorage.removeItem('Daria');
    let coins = 0,
        mistakes = 0;
    const createCard = (realName, heroName, points, date) => {
        const playerCard = {
            name: realName,
            hero: heroName,
            points,
            date: '1 august'
        };
        localStorage.setItem(`${realName}`, JSON.stringify(playerCard));
    };

    //show info about characters
    const showInfo = () => {
        const charactersInfoItems = document.querySelectorAll('.characters-info__item'),
            selectWrapper = document.querySelector('.select-wrapper');

        $('select').on('selectric-change', () => {
            const reg = new RegExp(`^${$('select').val()}`);
            charactersInfoItems.forEach(item => {
                const regCheck = reg.test(item.textContent.trim());
                item.classList.add('o-none');
                if (regCheck) {
                    item.classList.remove('o-none');
                    if (screen.width < 375) {
                        selectWrapper.classList.remove('right');
                        if ($('select').val() === 'Thanos') {
                            selectWrapper.classList.add('right');
                        }
                    }
                }
            });
        });
    };

    showInfo();
    // проверка правильности пароля и переадресация в личный кабинет
    const authorization = pass => {
        const errorMessage = document.querySelector('.error-message'),
            passInput = document.getElementById('password'),
            realNameInput = document.getElementById('real_name'),
            charactersInfo = document.querySelector('.characters-info'),
            popupWrapper = document.querySelector('.popup-wrapper'),
            selectWrapper = document.querySelector('.select-wrapper');

        if (pass === passInput.value.trim()) {
            errorMessage.classList.add('d-none');
            if (mistakes === 0) {
                coins = 1;
            }
            createCard(realNameInput.value.trim(), pass, coins);
            window.location.href = 'personalPage.html';
            popupWrapper.classList.add('d-none');
            selectWrapper.classList.remove('d-none');
            charactersInfo.classList.remove('d-none');
            charactersInfo.querySelectorAll('.characters-info__item').forEach(item => {
                if (!item.classList.contains('o-none')) {
                    item.classList.add('o-none');
                }
            });
        } else {
            errorMessage.classList.remove('d-none');
            mistakes = 1;
            createCard(realNameInput.value.trim(), pass, coins);
        }
    };
    // обработка инпутов в форме в попапе для авторизации
    const validation = () => {
        const auth = document.querySelector('.auth'),
            passInput = document.getElementById('password'),
            realNameInput = document.getElementById('real_name');
        auth.addEventListener('input', () => {
            realNameInput.value = realNameInput.value.replace(/[^A-z]/gi, '');
            realNameInput.value = realNameInput.value.toLowerCase().replace(/^.|\s./g, match => match.toUpperCase());
            passInput.value = passInput.value.replace(/\s{2,}/g, ' ');
            passInput.value = passInput.value.toLowerCase().replace(/^.|\s./g, match => match.toUpperCase());
        });
    };
    validation();
    // open popup with form on click
    const togglePopup = () => {
        const charactersInfo = document.querySelector('.characters-info'),
            popupWrapper = document.querySelector('.popup-wrapper'),
            selectWrapper = document.querySelector('.select-wrapper');

        document.addEventListener('click', event => {
            const target = event.target;
            if (target.closest('.choose-character')) {
                selectWrapper.classList.add('d-none');
                charactersInfo.classList.add('d-none');
                popupWrapper.classList.remove('d-none');
            }

            if (!popupWrapper.classList.contains('d-none')) {
                if (target.closest('.submit')) {
                    authorization($('select').val());
                }
                if (target.closest('.popup-content') === null && !target.closest('.choose-character')) {
                    popupWrapper.classList.add('d-none');
                    selectWrapper.classList.remove('d-none');
                    charactersInfo.classList.remove('d-none');
                }
            }
        });

    };

    togglePopup();



});
