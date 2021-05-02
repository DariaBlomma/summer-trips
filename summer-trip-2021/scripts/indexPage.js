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
    const charactersInfoItems = document.querySelectorAll('.characters-info__item');
    $('select').on('selectric-change', () => {
      const reg = new RegExp(`^${$('select').val()}`);
      charactersInfoItems.forEach(item => {
        const regCheck = reg.test(item.textContent.trim());
        item.classList.add('o-none');
        if (regCheck) {
          item.classList.remove('o-none');
        }
      })
    })
  };

  showInfo();
});
