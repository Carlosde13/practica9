<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio de formulario</title>
</head>
<body>
    <form method="POST" action="api/formulario/nuevo">
        <label for="nombre"> 
            Nombre
        </label>
        <input id="nombre" name="nombre" placeholder="ingresa tu nombre" type="text">

        <label for="email"> 
            Correo Electronico
        </label>
        <input id="email" name="email" placeholder="ingresa tu correo electronico" type="email">

        <label for="asunto"> 
            Asunto
        </label>
        <input id="asunto" name="asunto" placeholder="Asunto..." type="text">

        <label for="mensaje"> 
            Mensaje
        </label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe aqui tu mensaje..."></textarea>

        <button>Enviar</button>
    </form>
</body>
</html>