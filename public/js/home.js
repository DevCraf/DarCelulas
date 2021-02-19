// FUNCIONES GENERALES

// Retorna un número aleatorio entre 1 y la variable que recibe
function numero(data){
  return Math.floor(Math.random()*data)+1;
}

// Vacia el contenedor con los archivos temporales usados para las animaciones
function vaciar(){
  $(".animation-content").empty();
}

// NAVEGACION GENERAL HOME
var contenido = [
  {
    'id': 0,
    'titulo': 'fondo 1',
    'fondo': 'home_fondo_1.jpg',
    'clase': 'fondo_uno'
  },
  {
    'id': 1,
    'titulo': 'fondo 2',
    'fondo': 'home_fondo_2.jpg',
    'clase': 'fondo_dos'
  },
  {
    'id': 2,
    'titulo': 'fondo 3',
    'fondo': 'home_fondo_3.jpg',
    'clase': 'fondo_tres'
  },
  {
    'id': 3,
    'titulo': 'fondo 4',
    'fondo': 'home_fondo_4.jpg',
    'clase': 'fondo_cuatro'
  },
  {
    'id': 4,
    'titulo': 'fondo 5',
    'fondo': 'home_fondo_5.jpg',
    'clase': 'fondo_cinco'
  },
  {
    'id': 5,
    'titulo': 'fondo 6',
    'fondo': 'home_fondo_1.jpg',
    'clase': 'fondo_footer'
  },
]

// CAMBIAR EN EL EVENTO SCROLL
var running = false;
var currentPosition = 0;
var nrow_left = document.getElementById('nrow_left');
var nrow_right = document.getElementById('nrow_right');

// Navegación scroll
window.addEventListener('wheel', function(e){
  $('.home-content').addClass('no-view');
  var position = document.getElementById('img_back');
  if(running == false){
    running = true;
    if(e.deltaY < 0){
      if (currentPosition > 0) {
        currentPosition -= 1;
        start_animation(currentPosition);
      }
    }
    else{
      if (currentPosition < (contenido.length-1)) {
        currentPosition += 1;
        start_animation(currentPosition);
      }
    }
    position.setAttribute('data-id', currentPosition);
    changeElements(contenido[currentPosition]);
  }
});

// Navegacion rows
nrow_left.addEventListener('click', function(){
  start('left');
});

nrow_right.addEventListener('click', function(){
  start('right');
});

function start(dir){
  $('.home-content').addClass('no-view');
  var position = document.getElementById('img_back');

  if(running == false){
    running = true;
    if(dir == 'left'){
      if (currentPosition > 0) {
        currentPosition -= 1;
        start_animation(currentPosition);
      }
    }
    else{
      if (currentPosition < (contenido.length-1)) {
        currentPosition += 1;
        start_animation(currentPosition);
      }
    }
    position.setAttribute('data-id', currentPosition);
    changeElements(contenido[currentPosition]);
  }
}

function changeElements(data){
  var element = document.getElementById("img_back");
  element.className = 'row pagina ' + data.clase;
  $('#home-content-'+data.id).removeClass('no-view');
  running = false;
}

// DISPARO DE ANIMACIONES
function start_animation(data){
  $('body').stop();
  switch (data) {
    case 0:
      screen_1();
    break;
    case 1:
    break;
    case 2:
      console.log('Hola');
    break;
  }
}

//  ANIMACIONES
// Funcion default de inicio
var txt = [];
for (var i = 0; i < 100; i++) {
  txt[i] = "<img style='top: " + numero(80) + "%; left: " + numero(80) + "%;' class='home-circle-iluminacion-" + numero(3) + "' src='img/iluminacion.png' />";
}
$(".fondo_uno .animation-content").append(txt);
setTimeout(vaciar, 3000);

// ILUMINACIONES PANTALLA 1
function screen_1(){
  var txt = [];
  for (var i = 0; i < 100; i++) {
    txt[i] = "<img style='top: " + numero(80) + "%; left: " + numero(80) + "%;' class='home-circle-iluminacion-" + numero(3) + "' src='img/iluminacion.png' />";
  }
  $(".animation-content").append(txt);
  setTimeout(vaciar, 3000);
  return;
}
