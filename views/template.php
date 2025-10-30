<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Estilos de la Página -->
        <link rel="stylesheet" href="views/dist/css/styles.css">
        <!-- BOOTSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="plugin/components/Font Awesome/css/font-awesome.min.css">
        <!-- WSP -->
        <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
        <!-- ANIMATE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>VTecnologia</title>
    </head>

    <body>

        <?php

            //  TODO: MENÚ

            include "modules/menu.php";

            // Definir rutas válidas en un array
                $rutas_validas = ["inicio", "nosotros", "contacto", "sistema-alarma", "sistema-seguridad", "sistema-agua"];

                // Verificar la ruta
                if (isset($_GET["ruta"])) {
                    // Escapar la entrada del usuario para evitar problemas de seguridad
                    $ruta = htmlspecialchars($_GET["ruta"]);
                    // Obtener la ruta actual o "inicio" por defecto

                    // Comprobar si la ruta está en la lista de rutas válidas
                    if (in_array($ruta, $rutas_validas)) {
                        include "views/modules/" . $ruta . ".php";
                    } else {
                        // Incluir la página de error si la ruta no es válida
                        include "views/modules/error.php"; 
                    }
                } else {
                    include "views/modules/inicio.php";
                }

            //  TODO: PIE DE PÁGINA

            include "modules/footer.php";

        ?>

        <!-- Button Whatsapp Structure -->
    <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
        <div class="wcs_button_label">
                Contáctanos
            </div>  
        <div class="wcs_button wcs_button_circle">
            <span class="fa fa-whatsapp"></span>
        </div>  
    
        <div class="wcs_popup">
            <div class="wcs_popup_close">
                <span class="fa fa-close"></span>
            </div>
            <div class="wcs_popup_header">
                <span class="fa fa-whatsapp"></span>
                <strong>Servicio al cliente</strong>
                
                <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

            </div>  
            <div class="wcs_popup_input" 
                data-number="51978466726"
                data-availability='{ "monday":"07:00-19:30", "tuesday":"07:00-19:30", "wednesday":"07:00-19:30", "thursday":"07:00-19:30", "friday":"07:00-19:30", "saturday":"09:00-18:30", "sunday":"09:00-12:30" }'>
                <input type="text" placeholder="Escribir pregunta!" />
                <i class="fa fa-play"></i>
            </div>
            <div class="wcs_popup_avatar">
                <img src="views/dist/img/logo-dante.jpg" alt="logo dante">
            </div>
        </div>
    </div>


    <!-- jQuery 1.8+ -->
    <script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plugin JS file -->
    <script src="plugin/components/moment/moment.min.js"></script>
    <script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
    <script src="plugin/whatsapp-chat-support.js"></script>
    <script>
        $('#button-w').whatsappChatSupport({
            defaultMsg : '',
            });
    </script>

    <!-- jQuery 1.8+ -->
    <script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


    <script src="views/dist/js/main.js"></script>
    </body>
    
</html>