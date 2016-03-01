var posicionAvatarlogicaBasica=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarlogicaBasica=null; // almacena la animacion del avatar de logicaBasica

/**
 * Inicia la animacion del avatar de la ova de division logicaBasicar para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionIniciologicaBasica() {  // use a one-off timer
    stopAnimacionIniciologicaBasica();
    animacionAvatarlogicaBasica= setInterval(function(){
        moverAvatarlogicaBasica();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division logicaBasicar para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionIniciologicaBasica() {
    clearTimeout(animacionAvatarlogicaBasica);
}



/**
 * Cambia la animacion del avatar de logicaBasica.
 *  
 * @return {String} Nothing.
 */
function moverAvatarlogicaBasica(){    
    
    if(posicionAvatarlogicaBasica>=limiteAvatar){
        posicionAvatarlogicaBasica =0;
    }
    
    switch(posicionAvatarlogicaBasica){
        case 0:
            document.getElementById('avatarBienvenidalogicaBasica').src = "Vista/imagenes/universo/logicaBasica/avatarDerecha.png";            
            
            break;
        
        case 1:
            document.getElementById('avatarBienvenidalogicaBasica').src = "Vista/imagenes/universo/logicaBasica/avatarIzquierda.png";
            break;  
        
        case 2:
            document.getElementById('avatarBienvenidalogicaBasica').src = "Vista/imagenes/universo/logicaBasica/avatarDerecha.png";            
            break;                             
    }           
    posicionAvatarlogicaBasica++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verEtapasMitosis(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/logicaBasica/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/



/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} pregunta : Numero de la pregunta
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function calificarPreguntalogicaBasica(pregunta){    
    switch(pregunta){
        case 1:
            if($("input[name='logicaTestInicial']:checked").val()==3){//respuesta correcta la C                
                mensajeGeneral('Muy bien. La lógica se interesa por la claridad, orden y coherencia respecto de lo que pensamos y la forma como lo expresamos mediante el lenguaje.');                             
                correcto.playclip();
                avanzar('logicaBasica');
            }else{                
                mensajeError("Piensa con un poco más de cuidado y procura identificar una respuesta mucho más completa.");
                error.playclip();            
            }
            
            break;     
            
            
        case 2:
            if($("input[name='act1eva1']:checked").val()==3){//respuesta correcta la C                
                mensajeGeneral('Muy bien, esta oración es mucho más cercana a la definición de proposiciones dado su carácter de verdad o falsedad que podemos determinar posteriormente.');                             
                correcto.playclip();
                avanzar('logicaBasica');
            }else{ 
                
                if($("input[name='act1eva1']:checked").val()==1){
                    mensajeError("Recuerda que a la lógica no le interesa tanto el lenguaje emotivo.");
                    error.playclip();            
                }else{
                    if($("input[name='act1eva1']:checked").val()==2){
                        mensajeError("Recuerda que a la lógica no le interesa tanto el lenguaje informativo.");
                        error.playclip();            
                    }else{
                        mensajeError("Debes seleccionar una opcion.");
                        error.playclip();            
                    }   
                }                                                
            }            
            break;    
            
            
            
        case 3:
            if($("input[name='act2eva1']:checked").val()==1){//respuesta correcta la C                
                mensajeGeneral('Muy bien, esta oración es mucho más cercana a la definición de proposiciones dado su carácter de verdad o falsedad que podemos determinar posteriormente.');                             
                correcto.playclip();
                avanzar('logicaBasica');
            }else{ 
                
                if($("input[name='act2eva1']:checked").val()==2){
                    mensajeError("Recuerda que a la lógica no le interesa tanto el lenguaje emotivo.");
                    error.playclip();            
                }else{
                    if($("input[name='act2eva1']:checked").val()==3){
                        mensajeError("Recuerda que a la lógica no le interesa tanto el lenguaje directivo.");
                        error.playclip();            
                    }else{
                        mensajeError("Debes seleccionar una opcion.");
                        error.playclip();            
                    }   
                }                                                
            }            
            break; 
            
            
        case 4:
            if($("input[name='logicaEva1Act2']:checked").val()==2){//respuesta correcta la B
                mensajeGeneral('Muy bien, haz pensado lógicamente la implicación de la afirmación general y la haz traducido a lenguaje aristotélico.');
                correcto.playclip();
                avanzar('logicaBasica');
            }else{                
                mensajeError("Animo, recuerda pensar cuál es la implicación lógica de cada afirmación.");
                error.playclip();            
            }
            
            break;  
            
            
        case 5:
            if($("input[name='logicaEva1Act3']:checked").val()==1){//respuesta correcta la A
                mensajeGeneral('Muy bien, haz pensado lógicamente la implicación de la afirmación general y la haz traducido a lenguaje aristotélico.');
                correcto.playclip();
                avanzar('logicaBasica');
            }else{                
                mensajeError("Animo, recuerda pensar cuál es la implicación lógica de cada afirmación.");
                error.playclip();            
            }
            
            break;  
            
            
        case 6:
            if($("input[name='logicaEva1Act4']:checked").val()==2){//respuesta correcta la B
                mensajeGeneral('Muy bien, haz pensado lógicamente la implicación de la afirmación general y la haz traducido a lenguaje aristotélico.');
                correcto.playclip();
                avanzar('logicaBasica');
            }else{                
                mensajeError("Animo, recuerda pensar cuál es la implicación lógica de cada afirmación.");
                error.playclip();            
            }
            
            break;  
    }

}
















/**************************************/
/**************************************/
/***********VENTANAS INDEPENDIENTES****/
/**************************************/
/**************************************/


/**
 * Abre un fancybox en especifico
 * 
 * 
 * @return {String} Nothing.
 */
function abrirZoomMitosis(){
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#divZoomMitosis',
        'onClosed': function () {            
        }
    });
}




function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 



function reproducirAudio(id){    
    try{
        document.getElementById(id).load();
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}


function detenerAudio(id){    
    document.getElementById(id).pause();    
}