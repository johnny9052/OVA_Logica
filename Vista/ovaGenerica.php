<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <!--JAVASCRIPTS PROPIOS DE LA OVA-->
        <script type="text/javascript" src="Vista/js/ovaNavegacion.js"></script>  
        <script type="text/javascript" src="Vista/js/efectos/dragAndDrop.js"></script>          

        <title></title>      
    </head>
    <body>




        <!--OVA DIVISION CELULAR-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN  OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica'); clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="1" class="alineacionIzquierda">
                                <label class="subtituloDorado">TÍTULO:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Lógica</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">DESCRIPCIÓN:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Idioma:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Español</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Palabras clave:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Lógica, proposiciones, pensamiento, claridad, coherencia</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Autor:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Jorge Iván Soto Betancourt</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Entidad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Universidad de Caldas y Ministerio de Educación Nacional</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                <label class="titulo">PROCESOS FORMATIVOS</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Auto aprendizaje.</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"> 
                                    &nbsp;&nbsp;&nbsp;*Activa (para los contenidos interactivos)<br/>
                                    &nbsp;&nbsp;&nbsp;*Expositiva <br/>
                                    &nbsp;&nbsp;&nbsp;*Mixto</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Recurso:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Es de distintos tipos: ejercicio,texto y autoevaluación.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Medio</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Población:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Estudiantes universitarios</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Contexto:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Educación superior</label>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIENVENIDO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   


                        <tr>
                            <td>
                                <audio id="audio1LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track1.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidalogicaBasica" src="Vista/imagenes/universo/logicaBasica/avatarIzquierda.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div3logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD INICIAL</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleActividadInicial(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table class="fondoActividadInicial">
                                    <tr>
                                        <td colspan="1" width="100%" height="100%">
                                            <table border="0">
                                                <tr>
                                                    <td>
                                                        <div id="puzzle">
                                                            <table border="0">

                                                                <tr>

                                                                    <td>
                                                                        <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/1.png" >
                                                                    </td>

                                                                    <td>
                                                                        <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/2.png" >
                                                                    </td>                                                                                                                                 

                                                                    <td>
                                                                        <div class="contenedorPieza" id="unoActividadInicialLogica" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,1)">                                                                            
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/4.png" >
                                                                    </td>    



                                                                    <td>
                                                                        <div class="contenedorPieza" id="dosActividadInicialLogica" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,1)">                                                                            
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/6.png" >
                                                                    </td>   
                                                                </tr>

                                                                <tr>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 01</td>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 02</td>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 03</td>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 04</td>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 05</td>
                                                                    <td class="textoBlancoGrande alineacionCentro">POSICIÓN 06</td>
                                                                </tr>                                                                
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>                                 
                                            </table>                            
                                        </td>



                                        <td>
                                            <!--DIVISION DE TABLA Y LAS OPCIONES A PASAR-->
                                        </td>




                                        <td colspan="1">
                                            <table>  

                                                <tr>
                                                    <td>
                                                        <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,1)">                                                
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LogActInic" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/arriba.png" alt="pieza1LogActInic" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LogActInic" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/izquierda.png" alt="pieza2LogActInic" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LogActInic" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/abajo.png" alt="pieza3LogActInic" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LogActInic" src="Vista/imagenes/juegos/logicaBasica/actividadInicial/derecha.png" alt="pieza4LogActInic" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div4logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">OBJETIVOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    General:
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Reconocer aspectos importantes del pensamiento lógico e identificar algunas nociones generales de la lógica clásica <br/>
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Específicos:
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Conocer de forma dinámica e interactiva qué es la lógica <br/>
                                    &nbsp;&nbsp;&nbsp;* Familiarizarse con algunos conceptos lógicos y reconocer la importancia de los mismos en la comprensión y desarrollo del pensamiento lógico <br/>
                                    &nbsp;&nbsp;&nbsp;* Identificar algunas herramientas para la construcción de proposiciones categóricas, base del pensamiento lógico <br/>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div5logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿Qué sabes del tema?</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(1);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio2LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track2.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img  src="Vista/imagenes/universo/logicaBasica/img1.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. La lógica es:</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaTestInicial" value="1">

                                            <label class="texto">A. El estudio de las formas correctas de pensamientos que se trasmiten por medio de oraciones</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaTestInicial" value="2">
                                            <label class="texto">B. El estudio de procesos que nos permiten aceptar conocimientos previos</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaTestInicial" value="3">
                                            <label class="texto">C. El estudio de las formas correctas de presentar ideas por medio del lenguaje con miras a alcanzar conocimientos ordenados, claros y coherentes.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaTestInicial" value="4">
                                            <label class="texto">D. La ciencia de lo correcto y preciso para hablar</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div6logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">UNIDAD 1: QUÉ ES LA LÓGICA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="titulo">
                                    1.1 Nociones Generales
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    La lógica es el estudio de la relación entre el pensamiento, el lenguaje y el mundo, es decir, se interesa por aquellas cosas que pensamos respecto del mundo y la forma como las trasmitimos de manera clara, ordenada y coherente mediante el lenguaje. De ahí que podamos decir que se interesa por las formas correctas de presentar nuestras ideas. Ahora, cuando presentamos ideas buscamos defender algo, para lo cual presentamos otras ideas que apoyen eso que queremos defender. A lo primero lo denominamos conclusión o lo que queremos defender; a lo segundo lo denominamos premisas o razones en favor de la conclusión. El interés de la lógica es si lo que queremos defender guarda relación o no con lo que decimos en favor de ello.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Nociones Generales</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/paraRecordar1.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div8logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Nociones Generales</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio3LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track3.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/sabiasque1.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/> 
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">1.2 EL MATERIAL DE LOS ARGUMENTOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  



                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Dado que la lógica se ocupa de formas de argumentación correctas, debemos precisar que el material básico de la lógica lo constituyen aquellas oraciones que hacen parte de la expresión de nuestras ideas. A estas oraciones en el lenguaje lógico las denominamos 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">proposiciones.</label>
                                        <span class="custom info">Una proposición es un enunciado que es susceptible de verdad o falsedad. Tanto las premisas como la conclusión de los argumentos están constituidas por proposiciones, al menos en lo que le interesa a lógica debe serlo así.
                                        </span>
                                    </a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/paraRecordar1.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div10logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD DE EVALUACIÓN 1</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. De las siguientes oraciones cuál considerarías que es una proposición, teniendo en cuenta la definición proporcionada anteriormente:</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="act1eva1" value="1">

                                            <label class="texto">A. Te amo</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="act1eva1" value="2">
                                            <label class="texto">B. Son las cinco de la tarde</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="act1eva1" value="3">
                                            <label class="texto">C. El color de las montañas es verde.</label>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div11logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD DE EVALUACIÓN 1</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(3);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">2. De las siguientes oraciones cuál considerarías que es una proposición, teniendo en cuenta la definición proporcionada anteriormente:</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="act2eva1" value="1">

                                            <label class="texto">A. La capital de Caldas es Chinchiná </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="act2eva1" value="2">
                                            <label class="texto">B. Las personas honestas son muy queridas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="act2eva1" value="3">
                                            <label class="texto">C. ¡Cierre la puerta ahora!</label>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div12logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">UNIDAD 2: PROPOSICIONES</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio4LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track4.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/img2.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div13logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">2.1 ¿QUÉ SON LAS PROPOSICIONES?</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Las proposiciones corresponden a enunciados que son susceptibles de verdad o falsedad. Ahora, es importante distinguir al menos entre dos tipos de verdades para lo cual pensemos en el siguiente ejemplo, “La tierra es el centro del sistema solar” y comparémoslo con este otro,  “Juan lee un libro o no lo lee”. En el caso del primero la proposición es falsa en virtud de los hechos, mientras que la segunda es verdadera en virtud de sus componentes formales. Esto constituye la distinción entre la 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">verdad material</label>
                                        <span class="custom info">Verdad material:
                                            Usualmente se entiende que algo es verdadero en sentido material cuando se presenta una correspondencia entre los hechos y la correspondiente descripción que se hace. 
                                        </span>
                                    </a>
                                    y la 
                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">verdad formal.</label>
                                        <span class="custom info">Verdad formal:
                                            Usualmente se entiende que algo es verdadero en sentido formal cuando existe una independencia entre los hechos y la descripción, ya sea porque  no es necesario recurrir a estos o porque las palabras empleadas son suficientes para determinarla.
                                        </span>
                                    </a>

                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En el caso de la lógica aristotélica, las proposiciones presentaban unas características específicas que si bien no corresponden a nuestra forma actual de hablar, sí constituyen la base del pensamiento lógico. Para Aristóteles las proposiciones se denominaban como categóricas.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div14logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿QUÉ SON LAS PROPOSICIONES?</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio5LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track5.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/paraRecordar3.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Si quieres conocer un poco más acerca de cómo entender las proposiciones en la perspectiva matemática o simbólica, puedes consultar en el
                                    <a target="_blank" href="http://bancoovas.campusvirtualudecaldas.edu.co/ovaMatematica"><span>siguiente enlace </span></a>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div15logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">2.2. PROPOSICIONES CATEGÓRICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3" class="alineacionJustificafa" style="width: 800px">
                                <label class="texto">
                                    En el lenguaje aristotélico, una proposición categórica es aquella que relaciona un sujeto con un predicado, indicando si el sujeto es parte o está incluido en el predicado  o sí por el contrario está excluido del predicado. Los componentes entonces de estas proposiciones son  

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">un sujeto</label>
                                        <span class="custom info">
                                            Constituido por cualquier conjunto de individuos, clases o grupos que puedan operar como categorías
                                        </span>
                                    </a>

                                    ,un término que 

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">cuantifica </label>
                                        <span class="custom info">
                                            Los cuantificadores o <br/>
                                            cantidades usados en  <br/>
                                            esta lógica son  <br/>
                                            todos, ninguno y algunos
                                        </span>
                                    </a>

                                    los elementos de que hablamos en el sujeto, 

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo">un predicado</label>
                                        <span class="custom info">
                                            Constituido por cualquier conjunto de individuos, clases o grupos que puedan operar como categorías
                                        </span>
                                    </a>

                                    y una

                                    <a class="tooltip" href="#">
                                        <label class="subtitulo"> cópula o enlace </label>
                                        <span class="custom info">
                                            Por lo regular la constituye una variedad del verbo ser
                                        </span>
                                    </a>

                                    que relaciona el sujeto con éste
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div16logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">2.3. ESTRUCTURA DE LAS PROPOSICONES CATEGÓRICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 

<!--                        <tr>
    <td>
        <audio id="audioxLogicaBasica">
            <source src="Vista/audio/logicaBasica/Trackx.mp3">
        </audio>
    </td>
</tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/img3.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17logicaBasica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">2.3.1. TIPOS DE PROPOSICONES CATEGÓRICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 

<!--                        <tr>
    <td>
        <audio id="audioxLogicaBasica">
            <source src="Vista/audio/logicaBasica/Trackx.mp3">
        </audio>
    </td>
</tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/img4.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div18logicaBasica" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TIPOS DE PROPOSICONES CATEGÓRICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <audio id="audio6LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track6.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img src="Vista/imagenes/universo/logicaBasica/paraRecordar4.png" class="imagenOva">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div19logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">EJEMPLOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">                                                                
                                <table border="0" width="100%">
                                    <tr>
                                        <td>

                                        </td>

                                        <td colspan="3">
                                            <img src="Vista/imagenes/universo/logicaBasica/ejemplo1.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">
                                            <img src="Vista/imagenes/universo/logicaBasica/ejemplo2.png">
                                        </td>

                                        <td style="width: 400px;height: 150px" class="fondoA">
                                            <label class="alineacionIzquierda">
                                                <a class="tooltip" href="#">
                                                    <label class="subtitulo">Todo S es P (A)</label>
                                                    <span class="custom info">A:Ejemplos <br/> 
                                                        1. Todos los hombres son mortales; <br/>
                                                        2. Todas las mujeres son bonitas; <br/>
                                                        3. Todos los países son grandes; <br/>
                                                        4. Todas las montañas son violetas; <br/>
                                                        5. Todos los hombres son gigantes;
                                                    </span>
                                                </a>   
                                            </label>
                                        </td>

                                        <td>

                                        </td>

                                        <td class="fondoB">
                                            <label class="alineacionIzquierda">
                                                <a class="tooltip" href="#">
                                                    <label class="subtitulo">Todo S no es P (E)</label>
                                                    <span class="custom info">E:Ejemplos <br/>
                                                        1. Todos los mortales no son <br/> 
                                                        hombres; <br/>
                                                        2. Ninguna rosa es bonita;<br/>
                                                        3. Todos los continentes no <br/>
                                                        son grandes;<br/>
                                                        4. Ninguna vaca es violeta; <br/>
                                                        5. Ningún pingüino es atrevido;
                                                    </span>
                                                </a>
                                            </label>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td style="width: 400px;height: 150px" class="fondoC">
                                            <label class="alineacionIzquierda">
                                                <a class="tooltip" href="#">
                                                    <label class="subtitulo">Algún S es P (I)</label>
                                                    <span class="custom info">I:Ejemplos <br/> 
                                                        1. Algunos animales son carnívoros;<br/>
                                                        2. Algunas lámparas son de cristal;<br/>
                                                        3. Algunos planetas son grandes; <br/>
                                                        4. Algunas laderas son inestables; <br/>
                                                        5. Algunos mamíferos son gordos;
                                                    </span>
                                                </a>
                                            </label>
                                        </td>

                                        <td>

                                        </td>

                                        <td class="fondoD">                                            
                                            <label class="alineacionIzquierda">
                                                <a class="tooltip" href="#">
                                                    <label class="subtitulo">Algún S no es P (O)</label>
                                                    <span class="custom info">O:Ejemplos <br/> 
                                                        1. Algunos hombres no son <br/>
                                                        altos;<br/>
                                                        2. Algunas puertas no son <br/>
                                                        bonitas;<br/>
                                                        3. Algunas bananas no son <br/>
                                                        amarillas;<br/>
                                                        4. Algunos cerdos no son <br/>
                                                        grandes;<br/>
                                                        5. Algunas sillas no son <br/>
                                                        azules;

                                                    </span>
                                                </a>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div20logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Evaluación</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio7LogicaBasica" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaLogica/Vista/audio/logicaBasica/Track7.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/universo/logicaBasica/img5.png">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div21logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD 1</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleEvaluacion1Act1(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                       

                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table class="fondoEvaluacionActividad01" class="alineacionVecticialAlInicio">
                                    <tr>
                                        <td colspan="1" width="100%" height="100%" class="alineacionVecticialAlInicio">
                                            <table border="0" class="alineacionVecticialAlInicio">
                                                <tr>
                                                    <td>
                                                        <div id="puzzle">
                                                            <table border="0">

                                                                <tr>
                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/proposicion.png" >
                                                                    </td>
                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/caracteristica.png" >
                                                                    </td>
                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/tipo.png" >
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="unoLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="dosLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>                                                                                                                                 

                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/A.png" >
                                                                    </td>                                                                   
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="tresLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>    

                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="cuatroLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/I.png" >
                                                                    </td>      
                                                                </tr>   

                                                                <tr>
                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="cincoLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>    

                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="seisLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/O.png" >
                                                                    </td>        
                                                                </tr>   

                                                                <tr>
                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="sieteLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>    

                                                                    <td>
                                                                        <div class="contenedorPiezaEva1Act1" id="ochoLogicaEva1Act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,2)">
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  src="Vista/imagenes/juegos/logicaBasica/evaluacion1/E.png" >
                                                                    </td>       
                                                                </tr>   
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>                                 
                                            </table>                            
                                        </td>



                                        <td>
                                            <!--DIVISION DE TABLA Y LAS OPCIONES A PASAR-->
                                        </td>

                                        <td colspan="1" class="alineacionVecticialAlInicio">
                                            <table class="alineacionVecticialAlInicio">  
                                                <tr>
                                                    <td>
                                                        <div id="contenedorPiezasEva1act1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropLogica(event,1)">                                                
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/1.png" alt="pieza1LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/2.png" alt="pieza2LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/3.png" alt="pieza3LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/4.png" alt="pieza4LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/5.png" alt="pieza5LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/6.png" alt="pieza6LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/7.png" alt="pieza7LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8LogEva1Act1" src="Vista/imagenes/juegos/logicaBasica/evaluacion1/8.png" alt="pieza8LogEva1Act1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div22logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD 2</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(4);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   
                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/universo/logicaBasica/img6.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">Las arepas de maíz son deliciosas</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act2" value="1">

                                            <label class="texto">A. Algunas arepas son deliciosas (I)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act2" value="2">
                                            <label class="texto">B. Todas las arepas son deliciosas (A)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act2" value="3">
                                            <label class="texto">C. Algunas arepas no son deliciosas (O).</label>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div23logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PREGUNTA 2</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(5);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                         

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">Los latinos frecuentemente son alegres</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act3" value="1">

                                            <label class="texto">A. Algunos latinos son alegres (I)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act3" value="2">
                                            <label class="texto">B. Todas los latinos son alegres (A)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act3" value="3">
                                            <label class="texto">C. Ningún latino es alegre (E).</label>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div24logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PREGUNTA 3</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntalogicaBasica(6);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                         

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">Los colombianos nunca son patriotas</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act4" value="1">

                                            <label class="texto">A. Algunos patriotas no son colombianos (O)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act4" value="2">
                                            <label class="texto">B. Todos los colombianos no son patriotas (E)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="logicaEva1Act4" value="3">
                                            <label class="texto">C. Todos los patriotas no son colombianos (O).</label>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>

        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div25logicaBasica" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuLogicaBasica.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DOCUMENTOS DE AYUDA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>
                                        <td heigth="30%"></td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href=""><span>1. GARCÍA, Luis. (2000). Lógica y pensamiento crítico. Manizales: Universidad de Caldas. </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href=""><span>2. Pérez J., Miguel. (2006). Lógica clásica y argumentación cotidiana. Bogotá: Editorial <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pontificia Universidad Javeriana </span></a> <br/> 
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?logicaBasica" style="overflow: hidden;" class="ventana">
                        <table border="0">
                            <tbody>
         <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
        <?php
        //include("Vista/menusNavegacion/menuLogicaBasica.php");
        ?>

                            </td>
                        </tr>

                                <tr>
                                    <td>
                                        <img onclick="retroceder('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar('logicaBasica');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>    
                                <tr>
                            <td>
                                <audio id="audioxLogicaBasica">
                                    <source src="Vista/audio/logicaBasica/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>

                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->


<!--    <tr>
        <td>
            <audio id="audio4Organica">
                <source src="Vista/audio/organica/Track1.mp3">
            </audio>
        </td>
    </tr>-->


    </body>
</html>
