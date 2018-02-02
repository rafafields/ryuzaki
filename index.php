<?php

function replaceCharacters($data) {
  $data = str_replace('á','&aacute',$data);
  $data = str_replace('é','&eacute',$data);
  $data = str_replace('í','&iacute',$data);
  $data = str_replace('ó','&oacute',$data);
  $data = str_replace('ú','&uacute',$data);
  $data = str_replace('Á','&Aacute',$data);
  $data = str_replace('É','&Eacute',$data);
  $data = str_replace('Í','&Iacute',$data);
  $data = str_replace('Ó','&Oacute',$data);
  $data = str_replace('Ú','&Uacute',$data);
  $data = str_replace('Ñ','&Ntilde',$data);
  $data = str_replace('ñ','&ntilde',$data);
  return $data;
}



if (isset($_REQUEST['btncontacto'])) {
    
    $frm_datos_nombre = htmlentities(trim(strip_tags(stripslashes($_REQUEST['frm_contact_nombre']))), ENT_NOQUOTES, "UTF-8");
    $frm_datos_email = htmlentities(trim(strip_tags(stripslashes($_REQUEST['frm_contact_email']))), ENT_NOQUOTES, "UTF-8");
    $frm_datos_telefono = htmlentities(trim(strip_tags(stripslashes($_REQUEST['frm_contact_telefono']))), ENT_NOQUOTES, "UTF-8");
    $frm_datos_mensaje = htmlentities(trim(strip_tags(stripslashes($_REQUEST['frm_contact_mensaje']))), ENT_NOQUOTES, "UTF-8");
    $frm_datos_aceptacion = htmlentities(trim(strip_tags(stripslashes($_REQUEST['frm_contact_aceptacion']))), ENT_NOQUOTES, "UTF-8");

    $destinatario_email = 'flowmaxime@gmail.com';
    $webname = 'Test form';
    $subject = $frm_datos_nombre." contacta desde ".$webname.".";
    $message = "Un nuevo usuario ha contactado a través de ".$webanme.".

          Nombre: ".$frm_datos_nombre."
          Email: ".$frm_datos_email."
          Teléfono: ".$frm_datos_telefono."

          Observaciones: ".$frm_datos_mensaje;

    if (($frm_datos_nombre<>'') AND ($frm_datos_email<>'') AND ($frm_datos_telefono<>'') AND ($frm_datos_mensaje<>'')  AND ($frm_datos_aceptacion<>'')) {


        $message = $message.'[Correo enviado a '.$destinatario_email.']';
        $message_text = "Email de contacto desde el formulario de $webname";


        $cabeceras = 'From: test@rafafields.com' . "\r\n" .
              'Reply-To: flowmaxime@gmail.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

        $ok = mail($destinatario_email, $subject, $message, $cabeceras);
        
        $frm_datos_nombre = replaceCharacters($frm_datos_nombre);
        $frm_datos_email = replaceCharacters($frm_datos_email);
        $frm_datos_telefono = replaceCharacters($frm_datos_telefono);
        $frm_datos_mensaje = replaceCharacters($frm_datos_mensaje);
        $frm_datos_aceptacion = replaceCharacters($frm_datos_aceptacion);


        if($ok) {

         echo '<script>window.location.href = "thanks";</script>';

        }

      $resultado = "enviado";
    } else {
      if ($frm_datos_nombre=='')    { $error_nombre = 1;    }
      if ($frm_datos_email=='')     { $error_email = 1;   }
      if ($frm_datos_telefono=='')  { $error_telefono = 1;  }
      if ($frm_datos_mensaje=='')   { $error_mensaje = 1;   }
      if ($frm_datos_aceptacion=='')  { $error_aceptacion = 1;  }
    }
  }

//Carga la vista
require 'index.view.php';

?>
