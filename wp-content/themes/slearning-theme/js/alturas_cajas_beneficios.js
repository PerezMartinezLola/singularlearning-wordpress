function igualarAlturas() {
  const cajas = document.querySelectorAll('#cajas-beneficios .wp-block-column');
  let alturaMaxima = 0;

  cajas.forEach(caja => {
    caja.style.height = 'auto';
  });

  cajas.forEach(caja => {
    const altura = caja.offsetHeight;
    if (altura > alturaMaxima) {
      alturaMaxima = altura;
    }
  });

  cajas.forEach(caja => {
    caja.style.height = alturaMaxima + 'px';
  });
}

window.addEventListener('load', igualarAlturas);
window.addEventListener('resize', igualarAlturas);
