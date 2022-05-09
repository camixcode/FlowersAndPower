<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Formulario de Contacto</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Ingrese los siguientes datos:</h3>
                <form action="">
                    <p>
                        <label>*Nombre y Apellido: </label>
                        <input type="nombre" name="nombre">
                    </p>
                    <p>
                        <label>*Correo Electronico: </label>
                        <input type="correo" name="correo">
                    </p>
                
                    <p class="block">
                       <label>*Mensaje: </label> 
                        <textarea name="asunto" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Más Información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Duoc Uc Puente Alto</li>
                    <li><i class="fas fa-phone"></i> +569 9999 9999</li>
                    <li><i class="fas fa-envelope-open-text"></i> contacto@flowersandpower.cl</li>
                </ul>
                
            </div>
            <form action="enviado.html" method="GET" class="formulario">

                <input type="text" name="nombre" placeholder="nombre" id="nombre">
                <input type="text" name="correo" placeholder="correo" id="correo">
                <input type="text" name="asunto" placeholder="asunto" id="asunto">
                <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                <button type="button" onclick="validarFormulario()" >Enviar</button>


            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="app.js"></script>
</body>
</html>