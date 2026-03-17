export function initMenu() {
  const toggle = document.querySelector('.top-buttons__item--hidden');
  const menu = document.querySelector('.site-menu');

  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('active');
      toggle.classList.toggle('is-active');
    });
  }
}