<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Acceso a UpTask</p>
        
            <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/olvide" method="POST" class="formulario">
            <div class="campo">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Tu Email"
                    name="email" />
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/crear">¿Ya tienes una cuenta? Inicia sesión</a>
            <a href="/olvide">¿Aún no tienes una cuenta? Obtener una</a>
        </div>
    </div> <!-- .contenedor-sm  -->
</div>