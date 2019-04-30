<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Repaso ENL</title>
        <link rel="stylesheet" type="text/css" media="screen"
            href="styles.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <h1>Base de datos de alumnos</h1>
        </header>
        <section>
            <div class="contenido">
                <h3>Consulta</h3>
                <form>
                    <label>Introduce Profesión</label><br>
                    <input type="text" name="profesion" id="profesion" maxlength="9"
                        autocomplete="off" autofocus/><br>
                    <input type="button" value="Consultar" class="submit"
                        onclick="consultar();" /><br>
                </form>
            </div>
            <div id="respuesta">

            </div>
        </section>
    </body>
</html>