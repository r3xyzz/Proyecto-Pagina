<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Tu código CSS y otras configuraciones -->
    <!-- ... -->
</head>
<body>
    <div class="about">
        <!-- ... (Tu contenido actual) ... -->

        <!-- Formulario de contacto -->
        <h1>▂▃▄▅ Contacto & Redes ▅▄▃▂</h1>

        <form action="mailto:rexgamer152@gmail.com" method="post" enctype="text/plain">
            <!-- Input para la dirección de correo electrónico -->
            <label for="email">Tu correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <!-- Textarea para el mensaje -->
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <!-- Botón de enviar -->
            <button type="submit">Enviar</button>
        </form>

        <!-- Redes sociales y otros enlaces -->
        <!-- ... -->

        <!-- Certificados y diplomas -->
        <!-- ... -->

        <h1>▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀</h1>
    </div>

    <!-- Pie de página -->
    <div class="gray-box">
        <h1>¡Gracias por visitar mi página de vista de curriculum!</h1>
        <p>Espero que hayas encontrado mi información interesante. Si deseas ponerte en contacto conmigo o saber más sobre mi trabajo, no dudes en utilizar el formulario o los medios de contacto proporcionados.</p>
        <p>Página hecha en HTML & CSS, subida y publicada gracias a "App.netlify.com"</p>
    </div>
</body>
</html>


    <style>
        /* Agrega estilos específicos para el formulario y otros elementos si es necesario */
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgb(0, 0, 0);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>