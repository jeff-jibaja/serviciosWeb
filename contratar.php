<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/navegacion.css" rel="stylesheet" type="text/css"/>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
        <link href="css/perfil.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include_once './navegacion.php'; ?>

        <main class="main">
            <section class="header__profile">
                <div class="vistaPrevia">
                    <img src="">
                </div>                  
                <span   id="fotoLink"><img src="img/icons8_integrated_webcam_52px_1.png" ></span>
                <input id="foto" class="input-file" type="file">
                <div class="marcador">
                   sdasd
                </div>
            </section>
          
            <section class="comtenedor_form" >
                <form class="formulario" id="form" action="controlls/formularioPerfil.php">
                    <div class="grupo">
                        <label>Nombres</label>
                        <input type="text"  name="nom" id="nom" class="form-control">
                    </div>
                    <div class="grupos_sm">
                        <div class="grupo sm">
                            <label>Apellido paterno</label>
                            <input type="text" name="app" id="app" class="form-control">
                        </div>
                        <div class="grupo sm">
                            <label>Apellido materno</label>
                            <input type="text" name="apm" id="apm" class="form-control">
                        </div>
                    </div>
                    <div class="grupos_sm">
                        <div class="grupo sm">
                            <label>Categoria</label>
                            <select class="form-control" name="cat" id="cat" name="tipoServicio">
                                <option>tipo 1</option>
                                <option>tipo 2</option>
                            </select>

                        </div>
                        <div class="grupo sm">
                            <label>Nombre del servicio</label>
                            <input type="text" name="serv" id="serv" class="form-control">
                        </div>
                    </div>
                    <div class="grupos_sm">
                        <div class="grupo sm">
                            <label>Telefono</label>
                            <input type="text" name="tel" id="tel" class="form-control">
                        </div>
                        <div class="grupo sm">
                            <label>Direccion</label>
                            <input type="text" name="dir" id="dir" class="form-control">
                        </div>
                    </div>
                    <div class="grupo">
                        <label>Descripcion del servicio</label>
                        <input type="text" name="des"  id="des"  class="form-control">
                    </div>

                    <div class="grupo">
                        <input type="checkbox" name="condiciones" value="ON" name="term" id="term" />
                        <span>Acepto los <a href="ternimosycondiciones.php">terminos y condiciones</a></span>
                    </div>
                    
                    <div class="grupo">
                        <button type="submit" disabled  id="guardar" class="boton-block" >Guardar</button>
                    </div>

                </form>
            </section>

        </main>
        
        
        <script src="js/perfil.js" type="text/javascript"></script>
    </body>
</html>
