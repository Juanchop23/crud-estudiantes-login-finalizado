<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./about/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body>
    <div class="contact-container">
    <div class="about-section">
        <div class="inner-container">
            <h1>TecMontoya</h1>
            <p class="text">
                ¿Por qué lo terminé haciendo así? Antes de que se asignara el
                proyecto final con sus características, yo ya había hecho un CRUD con
                Bootstrap. El problema vino cuando le tuve que integrar inicios de sesión,
                donde por poquito termino haciendo spaghetti de código. En el proceso
                no sólo encontré errores, sino que también me encontré a mí mismo. Al final
                la página funciona que es lo importante.
            </p>
            <div class="skills">
                <span>Diseños</span>
                <span>Bases de datos</span>
                <span>Plataformas</span>
            </div>
        </div>
    </div>



<div class="container work-container">
        <h3>Trabaja con nosotros o contáctanos</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Nombres</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Número de contacto</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Descripción del motivo de contacto</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-primary mt-2" type="submit">Enviar</button>
        <button class="btn btn-danger mt-2" type="reset">Formatear</button>
    </div>
        </form>
    </div>
    </div>


    



    <!-- ====== BOOTSTRAP ====== -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>