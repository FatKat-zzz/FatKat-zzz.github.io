<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reports</title>

  <link rel="stylesheet" href="css\bootstrap-5.3.2-dist\css\bootstrap.css">
  <link rel="stylesheet" href="css\styles.css">


</head>
<body>
  
  <div class="container-fluid  px-0">
    <header>
      <h1>Reportes de Práctica</h1>
    </header>
    
    <!-- Contenedor de la información de los integrantes -->
    <section>
      <p>hola</p>
    </section>

    <!-- Contenedor de los títulos de los reportes -->
    <article class="py-3">
      
      <?php
        for($i = 0; $i<1; $i++){
      ?>
        <div class="row justify-content-center mx-0">
          <a class="report-container col-6 mb-3 py-2" href="reports\A7_PazosAzarel.pdf" target="_blank">
            <p class="fs-5 fw-medium text-start">Actividad 1: Prueba</p>
          </a>
        </div>
      <?php
        }
      ?>

    </article>

  </div>

  <script src="css\bootstrap-5.3.2-dist\js\bootstrap.bundle.js"></script>
  
</body>
</html>