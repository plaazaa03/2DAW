<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Red Social</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='micss.css'>
    <script src='main.js'></script>
    <style>
        p.tags {
            display: inline-block;
            background-color: cadetblue;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 3px;
            font-size: 80%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Air Web</h1>
    </header>

    <aside>
        <nav>
            <ul>
                <li>Inicio</li>
                <li>Sobre mi</li>
                <li>Blog</li>
                <li>Contacto</li>
            </ul>
        </nav>
    </aside>
    <main>


        <section>
            <!-- for each de los articulos -->
            <?php
            require_once("datos.php");

            $articulos = obtenerArticulos();

            foreach ($articulos as $resultadoArt) {
                echo "<article>";
                echo "<h2>" . $resultadoArt->getNombreArt() . "</h2>";
                echo "<p>" . $resultadoArt->getContenido() . "</p>"; 
                for ($i = 0; $i < count($resultadoArt->getTags()); $i++) {
                    echo "<p class='tags'>#" . $resultadoArt->getTags()[$i] . "</p>";
                }
                echo "<p>Likes: " . $resultadoArt->getLikes() . "</p>"; 
                echo "</article>";
            }

            ?>
        </section>
    </main>
    <!-- <button class="floating-btn" onclick="openModal()">+</button>
    <div class="modal" id="postModal" style="display: none;">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">x</span>
            <h2>Crear Nuevo Articulo</h2>
            <form>
                <label for="tittle">Nombre Articulo</label>
                <input type="text" id="tittle" name="tittle" required>

                <label for="author">Autor</label>
                <input type="text" id="author" name="author" required>

                <label for="date">Fecha Articulo</label>
                <input type="date" id="date" name="date" required>

                <label for="content">Contenido Articulo</label>
                <input type="text" id="content" name="content" required>
                <button type="button">Publicar</button>
            </form>
        </div>
    </div> -->

    <script>

        function openModal() {
            const modal = document.getElementById('postModal');
            modal.style.display = "flex";
        }
        function closeModal() {
            const modal = document.getElementById('postModal');
            modal.style.display = "none";
        }

    </script>

</body>



</html>