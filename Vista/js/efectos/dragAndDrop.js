
/**
* Función que se ejecuta al arrastrar el elemento. 
**/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4'; 
}

/**
* Función que se ejecuta se termina de arrastrar el elemento. 
**/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");			
}

/**
* Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
**/
function enter(e) {
    return true;
}

/**
* Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
* Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
**/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas") || (e.target.className == "contenedorPiezaEva1Act1") || (e.target.id == "contenedorPiezasEva1act1"))
        return false;
    else
        return true;
}
    
/**
* Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
**/
function comprobarnavegador() {
    if( 
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************DIVISION CELULAR******************************/


/**
* Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
**/
function dropLogica(e,actividad){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    
    switch(actividad){
        case 1:
            comprobarPuzzleActividadInicial(1);
            break;
            
        case 2:
            comprobarPuzzleEvaluacion1Act1(1);
            break;
    }
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleActividadInicial(tipo){
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza2LogActInic').parentNode.id=='unoActividadInicialLogica') &&
            (document.getElementById('pieza4LogActInic').parentNode.id=='dosActividadInicialLogica'))
            {
            mensajeGeneral('Muy bien, haz hecho uso del pensamiento lógico para identificar la secuencia correcta que gira 45 grados en el sentido contrario de las manecillas del reloj, lo que indica que has pensado de manera organizada y secuencial');
            correcto.playclip();
        }    
    }else{        
        if((document.getElementById('pieza2LogActInic').parentNode.id=='unoActividadInicialLogica') &&
            (document.getElementById('pieza4LogActInic').parentNode.id=='dosActividadInicialLogica'))
            {
            mensajeGeneral('Muy bien, haz terminado la actividad');
            correcto.playclip();
            avanzar('logicaBasica');
        }else{
            mensajeError('Debes pensar de forma ordenada para organizar la secuencia.');
            error.playclip();
        }    
    }
}





/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleEvaluacion1Act1(tipo){
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza1LogEva1Act1').parentNode.id=='unoLogicaEva1Act1') &&
            (document.getElementById('pieza2LogEva1Act1').parentNode.id=='dosLogicaEva1Act1') &&
            (document.getElementById('pieza3LogEva1Act1').parentNode.id=='tresLogicaEva1Act1') &&
            (document.getElementById('pieza4LogEva1Act1').parentNode.id=='cuatroLogicaEva1Act1') &&
            (document.getElementById('pieza5LogEva1Act1').parentNode.id=='cincoLogicaEva1Act1') &&
            (document.getElementById('pieza6LogEva1Act1').parentNode.id=='seisLogicaEva1Act1') &&
            (document.getElementById('pieza7LogEva1Act1').parentNode.id=='sieteLogicaEva1Act1') &&
            (document.getElementById('pieza8LogEva1Act1').parentNode.id=='ochoLogicaEva1Act1')    
            ){
            mensajeGeneral('Muy bien, haz identificado correctamente las estructuras de proposiciones categóricas.');
            correcto.playclip();
        }    
    }else{        
        if((document.getElementById('pieza1LogEva1Act1').parentNode.id=='unoLogicaEva1Act1') &&
            (document.getElementById('pieza2LogEva1Act1').parentNode.id=='dosLogicaEva1Act1') &&
            (document.getElementById('pieza3LogEva1Act1').parentNode.id=='tresLogicaEva1Act1') &&
            (document.getElementById('pieza4LogEva1Act1').parentNode.id=='cuatroLogicaEva1Act1') &&
            (document.getElementById('pieza5LogEva1Act1').parentNode.id=='cincoLogicaEva1Act1') &&
            (document.getElementById('pieza6LogEva1Act1').parentNode.id=='seisLogicaEva1Act1') &&
            (document.getElementById('pieza7LogEva1Act1').parentNode.id=='sieteLogicaEva1Act1') &&
            (document.getElementById('pieza8LogEva1Act1').parentNode.id=='ochoLogicaEva1Act1')    
            ){
            mensajeGeneral('Muy bien, haz identificado correctamente las estructuras de proposiciones categóricas.');
            correcto.playclip();
            avanzar('logicaBasica');
        }else{
            mensajeError('Animo, recuerda qué implicación lógica trae consigo el enunciar estas ideas.');
            error.playclip();
        }    
    }
}