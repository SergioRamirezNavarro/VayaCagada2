<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de MySQL está en otro lugar
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = "1234"; // Cambia esto por tu contraseña de MySQL
$database = "usuarios"; // Cambia esto por el nombre de tu base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];

    // Procesar la imagen
    $image = $_FILES["image"]["name"];
    $target_dir = "static/img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Verificar si la imagen es real o falsa
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Verificar el tamaño de la imagen
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Permitir ciertos formatos de archivo
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk está configurado en 0 por un error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // Si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insertar datos en la tabla usuario
            $sql = "INSERT INTO mierdas (titulo, imagen, descripcion) VALUES ('$titulo', '$image', '$descripcion')";
            if ($conn->query($sql) === TRUE) {
                echo "Nuevo elemento añadido correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAYA CAGADA!!!</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href='//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="static/css/blog.css">

</head>

<body>
    <h2 id="textos">¡VAYA KAGADA!</h2>

    <div class="navbar">
        <div class="scrollable">
            <div class="frame">
                <img src="static/img/descarga1.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA REALISTA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga2.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA CARTOON.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga3.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE CHOCOLATE.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga4.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DEL ORGULLO (sin ofender...).</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga5.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA EN EMOJI.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga6.jpg" alt="Your Image">
                <div class="description">
                    <p>MIEDA DE JUEGO.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga7.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE BEBIDA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga8.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE PELICULA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga9.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE MEME.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga10.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE "MUSICA".</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga11.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE MARCA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga12.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE TIEMPO/CLIMA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga13.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE SECUELAS.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga14.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA EN FORMA HUMANA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga15.jpg" alt="Your Image">
                <div class="description">
                    <p>SCARABEUS SACER.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga16.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE BICHO.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga17.jpg" alt="Your Image">
                <div class="description">
                    <p>COPROLITO (MIERDA FOSILIZADA).</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga18.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA DE COMPAÑIA.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga19.jpg" alt="Your Image">
                <div class="description">
                    <p>MIERDA PINCHADA EN UN PALO.</p>
                </div>
            </div>
            <div class="frame">
                <img src="static/img/descarga20.jpg" alt="Your Image">
                <div class="description">
                    <p>PORNO DE MIERDA.</p>
                </div>
            </div>
            <?php
            // Consulta SQL para obtener datos de la tabla "mierdas"
            $sql = "SELECT * FROM mierdas";
            $result = $conn->query($sql);

            // Verificar si hay resultados
            if ($result->num_rows > 0) {
                // Iterar sobre cada fila de resultados
                while ($row = $result->fetch_assoc()) {
                    // Mostrar cada fila en un nuevo elemento <div>
                    echo '<div class="frame">
                <img src="static/img/' . $row["imagen"] . '" alt="Your Image">
                <div class="description">
                    <p>' . $row["titulo"] . '</p>
                </div>
              </div>';
                }
            } else {
                echo "No se encontraron resultados.";
            }


            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>


        </div>
    </div>
    <!-- Formulario para agregar nuevos elementos -->
    <div class="frame">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>AÑADIR MIERDA:</h3>
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <input type="submit" value="Agregar elemento">
        </form>
    </div>

    <hr>
    <h2 id="textos">(PEDO-)FLATOTECA</h2>
    <!--
    <h3>Post List</h3>
    {% block content %}
    {% endblock %}
    -->

</body>

</html>