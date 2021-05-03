document.addEventListener('DOMContentLoaded', function() {
  //jquery for select
  $(function() {
    $('select').selectric({
      disableOnMobile: false,
      nativeOnMobile: false
    });
  });

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
      })
    })
  };

  showInfo();
  const authorize = () => {
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
          popupWrapper.classList.add('d-none');
          selectWrapper.classList.remove('d-none');
          charactersInfo.classList.remove('d-none');
          charactersInfo.querySelectorAll('.characters-info__item').forEach(item => {
            if (!item.classList.contains('o-none')) {
              item.classList.add('o-none');
            }
          })
        } 
        if (target.closest('.popup-content') === null && !target.closest('.choose-character')) {
          popupWrapper.classList.add('d-none');
          selectWrapper.classList.remove('d-none');
          charactersInfo.classList.remove('d-none');
        }
      }
    });

  };

  authorize();
});
