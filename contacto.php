<div id="formulario">
    <form id="contacto" name="contacto"  action="send.php" method="POST" onsubmit="return Validacion()">
        <!--si el evento onsubmit devuelve el valor true, el formulario se envía como lo haría normalmente-------->
        <div class="basicos">
            <ul>
                <li>DNI: <input type="text" name="dni" id="dni" size="10"></li>
                <li>Nombre y Apellidos: <input type="text" name="nombre" id="nombre" size="20"></li>
                <li>Correo electrónico: <input type="text" name="email" id="email" size="20"></li>
            </ul>
        </div>
        <ul>
            <li>Texto del mensaje:</li>
            <li>
                <textarea name="mensaje" id="mensaje" cols="60" rows="6"></textarea></li>
            <li>
                <input  type="submit" value="Enviar" name="enviar">
                <!--Si ha pulsado enviar una vez, se desactiva el botón para no poder volver a pulsarlo--->
                <input type="reset" value="Borrar"> 
                <input type="button" value="Cancelar" onClick="location.href = './?p=index.php'">
            </li>
        </ul>
    </form>
</div>
