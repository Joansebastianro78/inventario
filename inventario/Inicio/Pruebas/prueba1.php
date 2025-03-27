<!DOCTYPE html>
<html>
<head>
    <title>Modal en PHP con JavaScript</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<dialog id="alert-dialog">
<form class="row g-3 needs-validation" novalidate action ="ingresar.php" method="POST">
  <div class="col-md-2 position-relative">
    <label for="validationTooltip01" class="form-label">Cantidad</label>
    <input type="text" class="form-control"  name ="cantidad"id="validationTooltip01" placeholder="Cantidad" required>
    <div class="valid-tooltip">
      Digite la cantidad
    </div>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip02" class="form-label">Operador</label>
    <input type="text" class="form-control" id="validationTooltip02" name = "operador" placeholder="Operador" required>
    <div class="valid-tooltip">
      Falta el operador
    </div>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltipUsername" class="form-label">Salida</label>
    <div class="input-group has-validation">
     <input type="date" class="form-control" name ="salida"id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend"  required>
      <div class="invalid-tooltip">
        Ingresa la fecha de salida
      </div>
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Nombre</label>
    <input type="text" class="form-control" name ="nombre"id="validationTooltip03" placeholder="Nombre" required>
    <div class="invalid-tooltip">
      Digite el nombre
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Area</label>
    <input type="text" class="form-control" name ="area"id="validationTooltip03" placeholder="Area" required>
    <div class="invalid-tooltip">
      Digite el area
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary " type="submit">Guardar</button>
  </div>
  </form>

</div>
</div>
  
  <button onClick="this.parentElement.close()">Ok!</button>
</dialog>

<button id="show-button" class = "btn btn-primary mb-1 mb-md-0">Registrar</button>

    <script src="../Inicio/prueba.js"></script>
</body>
</html>