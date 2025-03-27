<?php
$servename = "localhost:3306";
$database = "inventario";
$username = "root";
$password = "";

 
$conn = mysqli_connect($servename, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 

}

// Consulta SQL para obtener los datos
$sql = "SELECT salida, cantidad,operador FROM reporte";
$result = $conn->query($sql);

// Crear un array para almacenar los datos
$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = array('salida' => $row['salida'], 'cantidad' => $row['cantidad'], 'operador' => $row['operador']);
}

// Codificar los datos en JSON para pasarlos a JavaScript
$jsonData = json_encode($data);

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gráfico de Entrada y Salida de Productos</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>

  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    // Access the data passed from PHP using the variable name you defined
    var data = <?php echo $jsonData; ?>;

    // Convert the data to a format suitable for Chart.js
    var labels = data.map(function(item) { return item.salida; });
    var entradaData = data.map(function(item) { return item.cantidad; });
    var salidaData = data.map(function(item) { return item.operador; });

    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'salida',
          data: entradaData,
          borderColor: 'green',
          fill: false
        }, {
          label: 'cantidad',
          data: salidaData,
          borderColor: 'red',
          fill: false
        }]
      },
      options: {
        scales: {
          xAxes: [{
            type: 'time',
            time: {
              unit: 'day'
            }
          }]
        }
      }
    });
  </script>
</body>
</html>
