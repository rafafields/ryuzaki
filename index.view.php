<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <script type="text/javascript" src="https://cf-4053.kxcdn.com/conversational-form/0.9.70/conversational-form.min.js" crossorigin></script>


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <form class="container" method="post" action="" name="frm_contact" id="frm_contact" cf-form>

              <div class="form-group">
                <input class="form-control cta-brd" placeholder="Nombre" type="text" id="frm_contact_nombre" name="frm_contact_nombre" value="<?php $frm_contact_nombre;?>" >
                <div class="has-error-msg" id="contact_error-nombre" name="contact_error-nombre"><i class="fa fa-exclamation"></i> Debes rellenar este campo</div>
              </div>
              <div class="form-group">
                <input class="form-control cta-brd" placeholder="Email" type="text" id="frm_contact_email" name="frm_contact_email" value="<?php $frm_contact_email;?>" >
                <div class="has-error-msg" id="contact_error-email" name="contact_error-email"><i class="fa fa-exclamation"></i> Introduce un email válido</div>
              </div>
              <div class="form-group">
                <input class="form-control cta-brd" placeholder="Teléfono" type="tel" id="frm_contact_telefono" name="frm_contact_telefono" value="<?php $frm_contact_telefono;?>" >
                <div class="has-error-msg" id="contact_error-telefono" name="contact_error-telefono"><i class="fa fa-exclamation"></i> Introduce un teléfono válido</div>
              </div>
            <div class="form-group">
            <textarea class="form-control cta-brd" id="frm_contact_mensaje" placeholder="Déjanos todos los detalles. Por ejemplo, número de personas" value="Déjanos un mensaje" name="frm_contact_mensaje"><?php $frm_contact_mensaje;?></textarea>
            <div class="has-error-msg" id="contact_error-mensaje" name="contact_error-mensaje"><i class="fa fa-exclamation"></i> Debes rellenar este campo</div>
            </div>
             <div class="row">
                 <div class="col-sm-7">
                     <div class="form-group checkbox-outer">
                        <input type="checkbox" id="frm_contact_aceptacion" name="frm_contact_aceptacion"> He leído y entendido el <a class="sup-text" href="/aviso-legal" target="_blank" style="color:#333;">aviso legal</a> y acepto la política de protección de datos.
                        <div class="has-error-msg" id="contact_error-aceptacion" name="contact_error-aceptacion"> &raquo; Debes Aceptar CONDICIONES.</div>
                      </div>
                 </div>
                 <div class="col-sm-5">
                     <button type="submit" id="btncontacto" name="btncontacto" class="btn btn-block btn-lg cta-bg white-text base-brd">ENVIAR</button>
                 </div>
             </div>

        </form>
        
        <div id="cf-context" role="cf-context" cf-context></div>
       
<!--
       <form id="form" cf-form>
          <label for="radio">
            <input cf-questions="Hi friend. Ready to signup for our demo newsletter?" cf-label="Yes, let's begin!" type="radio" value="0">
            Start
          </label>
          <input type="text" name="FNAME" cf-questions="What is your firstname?">
          <input type="text" name="LNAME" cf-questions="What is your lastname?">
          <input type="text" name="EMAIL" cf-questions="What is your email?">
        </form>
-->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" lazyload="1">
        
<!--        <link rel="stylesheet" href="css/bot.min.css">-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/space10-community/conversational-form@0.9.70/dist/conversational-form.min.js" crossorigin></script>
        
        <style>
        
        #cf-context { 
          width: 100vw; 
          height: 100vh; 
        } 
        
        </style>
        
        <script>
        
            window.onload = function() {
              var conversationalForm = window.cf.ConversationalForm.startTheConversation({
                formEl: document.getElementById("form"),
                context: document.getElementById("cf-context"),
                submitCallback: function() {
                 conversationalForm.addRobotChatResponse("Ya has terminado"); 
                }
              });
            };
        
        </script>
        
<!--        <script src="js/bot.min.js"></script>-->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" async></script>

        <script type="text/javascript">
          //Validar formulario
          $(document).ready(function(){

            //hide campos error
            $( "#contact_error-nombre" ).hide();
            $( "#contact_error-email" ).hide();
            $( "#contact_error-telefono" ).hide();
            $( "#contact_error-mensaje" ).hide();
            $( "#contact_error-aceptacion" ).hide();


            //global vars
            var form = $("#frm_contact");
            var nombre = $("#frm_contact_nombre");
            var email = $("#frm_contact_email");
            var telefono = $("#frm_contact_telefono");
            var mensaje = $("#frm_contact_mensaje");
            var aceptacion = $("#frm_contact_aceptacion");

            //On blur
            nombre.blur(validateNombre);
            email.blur(validateEmail);
            telefono.blur(validateTelefono);
            mensaje.blur(validateMensaje);
            aceptacion.blur(validateAceptacion);

            form.submit(function(){
              if(validateNombre() & validateEmail() & validateTelefono() & validateMensaje() & validateAceptacion())
                return true
              else
                return false;
            });

            function validateNombre(){
              if($("#frm_contact_nombre").val().length < 3)                                   { $( "#contact_error-nombre" ).show();    return false;   } else {  $( "#contact_error-nombre" ).hide();    return true;    }
            }
            function validateEmail(){
              if($("#frm_contact_email").val().indexOf('@', 0) == -1 || $("#frm_contact_email").val().indexOf('.', 0) == -1)  { $( "#contact_error-email" ).show();     return false;   } else {  $( "#contact_error-email" ).hide();     return true;    }
            }
            function validateTelefono(){
              if($("#frm_contact_telefono").val().length < 9 || isNaN($("#frm_contact_telefono").val()))            { $( "#contact_error-telefono" ).show();    return false;   } else {  $( "#contact_error-telefono" ).hide();    return true;    }
            }
            function validateMensaje(){
              if($("#frm_contact_mensaje").val().length < 7)                                  { $( "#contact_error-mensaje" ).show();   return false;   } else {  $( "#contact_error-mensaje" ).hide();   return true;    }
            }
            function validateAceptacion(){
              if($("#frm_contact_aceptacion").is(':checked'))                                 { $( "#contact_error-aceptacion" ).hide();  return true;    } else {  $( "#contact_error-aceptacion" ).show();  return false;   }
            }
          });
        </script>
    </body>
</html>
