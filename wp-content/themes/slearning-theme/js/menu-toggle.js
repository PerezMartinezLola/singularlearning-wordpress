document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.querySelector('.menu-toggle');
  const navDerecha = document.querySelector('.menu-menu-1-container ul');

  if(toggleButton && navDerecha) {
    toggleButton.addEventListener('click', () => {
      toggleButton.classList.toggle('active');
      navDerecha.classList.toggle('active');
    });
  }
});
