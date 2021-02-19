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

var running = false;
var currentPosition = 0;

var nrow_left = document.getElementById('nrow_left');
var nrow_right = document.getElementById('nrow_right');

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
