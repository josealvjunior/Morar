$('.dropdown-menu').on('click', function(e) {
    if($(this).hasClass('dropdown-menu-form')) {
        e.stopPropagation();
    }
});

//menu expansível

$('[data-toggle=collapse]').click(function(){
	
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon glyphicon-chevron-right glyphicon glyphicon-chevron-down");
  
});

$('.collapse').on('show', function (e) {
  
  	// hide open menus
  	$('.collapse').each(function(){
      if ($(this).hasClass('in')) {
          $(this).collapse('toggle');
      }
    });
  
})


//marcação botões

$(document).ready(function(){
    splited = document.URL.split('/')
    arquivo = splited[splited.length-1];
    if(arquivo == 'lista-anuncios.php' || arquivo == 'lista-anuncios.php#'){
      $('#anuncio').addClass('active');
      $('#lista').addClass('sub-menu-ativo');
      $('#anuncio + ul').collapse('toggle');
    }
    if(arquivo == 'cadastro-anuncios.php' || arquivo == 'cadastro-anuncios.php#'){
      $('#anuncio').addClass('active');
      $('#cadastro').addClass('sub-menu-ativo');
      $('#anuncio + ul').collapse('toggle');
    }

  $('.menu-vertical > .nav > li > a').each(function(){
    if(arquivo == $(this).attr('href')){
        $(this).addClass('active');
      }
  })
});



/*$(document).ready(function(){

  $('.menu-vertical > .nav > li > a').each(function(){
    splited = document.URL.split('/')
    arquivo = splited[splited.length-1];
    if(arquivo == $(this).attr('href')){
        $(this).addClass('active');
          }
    if(arquivo == 'lista-anuncios.php' || arquivo == 'cadastro-anuncios.php'){
      $('#anuncio').addClass('active');
      $('#anuncio + ul').show();
      $('.sub-level > a > li').addClass('azul');
    }
  })
});*/
