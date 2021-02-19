console.log('ENTRO');
// Desplegar menú de derecha
var btn = document.getElementById('btn_menu');
btn.addEventListener('click', function(e){
  e.preventDefault();
  $('#lateral_menu').removeClass('lateral_menu_salida');
  $('#lateral_menu').addClass('lateral_menu_entrada');
  $('#menu_principal').addClass('lineh');
  $('#menu_principal').removeClass('wlineh');
  $('#dark_shadow').addClass('active');
});

// Cerrar menú
var btn_close = document.getElementById('btn_close');
btn_close.addEventListener('click', cerrar_menu);

var btn_close_d = document.getElementById('dark_shadow');
btn_close_d.addEventListener('click', cerrar_menu);

function cerrar_menu(){
  $('#lateral_menu').addClass('lateral_menu_salida');
  $('#lateral_menu').removeClass('lateral_menu_entrada');
  $('#menu_principal').addClass('wlineh');
  $('#menu_principal').removeClass('lineh');
  $('#dark_shadow').removeClass('active');
}
