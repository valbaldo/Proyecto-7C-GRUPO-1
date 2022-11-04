var btnAbrirPopup0 = document.getElementById('btn-abrir-popup0'),
  overlay0 = document.getElementById('overlay0'),
  popup0 = document.getElementById('popup0'),
  btnCerrarPopup0 = document.getElementById('btn-cerrar-popup0');

btnAbrirPopup0.addEventListener('click', function(){
  overlay0.classList.add('active');
  popup0.classList.add('active');
});

btnCerrarPopup0.addEventListener('click', function(e){
  e.preventDefault();
  overlay0.classList.remove('active');
  popup0.classList.remove('active');
});