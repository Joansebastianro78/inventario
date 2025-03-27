<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../Inicio/estilos/img/icono.png" type="image/x-icon">
    <title>Inventario | Satlock</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../Inicio/estilos/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">


        <img class="navbar-brand ps-3" src="../Inicio/estilos/img/logoaplicacionq.png" alt="" href="./index.php">

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">configuracion</a></li>
                    <li><a class="dropdown-item" href="../Inicio/index.php">Actividad de registro</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../login.php"> Cerrar sesion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Centro</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interfaz</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Inventario
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Vodafone
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../Inicio/entradavoda.php">Entrada</a>

                                        </nav>
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../Inicio/entradavoda.php">salida</a>

                                        </nav>
                                    </div>

                                </nav>
                            </div>


                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Movistar
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../Inicio/entradamovis.php">Entrada</a>

                                        </nav>
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../Inicio/salidamovi.php">salida</a>

                                        </nav>
                                    </div>

                                </nav>
                            </div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">

                            </div>
                            <div class="sb-sidenav-menu-heading">Complementos</div>
                            <a class="nav-link" href="../Inicio/reporte.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Reporte
                            </a>
                            <a class="nav-link" href="../Inicio/reporte.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Configuración
                            </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Conectado Como</div>
                    Administrator
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Entrada</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <h5><?php
                                        include("../conexion.php");

                                        $sql1 = "SELECT COUNT(*) AS total_usuarios FROM entrada";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_assoc($result1);
                                        $sql2 = "SELECT COUNT(*) AS total_productos FROM entradamovi";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($result2);
                                        $total_general = $row1['total_usuarios'] + $row2['total_productos'];

                                        echo  $total_general;
                                        ?> </h5>

                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Inventario</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h5><?php
                                        include("../conexion.php");

                                        $sql1 = "SELECT COUNT(*) AS total_usuarios FROM entrada";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_assoc($result1);
                                        $sql2 = "SELECT COUNT(*) AS total_productos FROM entradamovi";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        $sql3 = "SELECT COUNT(*) AS total_salida FROM salida";
                                        $result3 = mysqli_query($conn, $sql3);
                                        $row3 = mysqli_fetch_assoc($result3);
                                        $sql4 = "SELECT COUNT(*) AS total_salidam FROM salidam";
                                        $result4 = mysqli_query($conn, $sql4);
                                        $row4 = mysqli_fetch_assoc($result4);
                                        $total_general = $row1['total_usuarios'] + $row2['total_productos'] - $row3['total_salida'] - $row4['total_salidam'];

                                        echo $total_general;
                                        ?> </h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Salida</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h5><?php
                                        include("../conexion.php");

                                        $sql1 = "SELECT COUNT(*) AS total_salida FROM salida";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_assoc($result1);
                                        $sql2 = "SELECT COUNT(*) AS total_salidam FROM salidam";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($result2);
                                        $total_general = $row1['total_salida'] + $row2['total_salidam'];

                                        echo  $total_general;
                                        ?> </h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Gráfico de áreas
                                </div>
                                <?php
                                include('../conexion.php');


                                $sql = "SELECT salida, cantidad,operador FROM reporte";
                                $result = $conn->query($sql);


                                $data = array();
                                while ($row = $result->fetch_assoc()) {
                                    $data[] = array('salida' => $row['salida'], 'cantidad' => $row['cantidad'], 'operador' => $row['operador']);
                                }


                                $jsonData = json_encode($data);

                                $conn->close();
                                ?>
                                <canvas id="myChart"></canvas>

                                <script>
                                    var ctx = document.getElementById('myChart').getContext('2d');

                                    var data = <?php echo $jsonData; ?>;


                                    var labels = data.map(function(item) {
                                        return item.salida;
                                    });
                                    var entradaData = data.map(function(item) {
                                        return item.cantidad;
                                    });
                                    var salidaData = data.map(function(item) {
                                        return item.operador;
                                    });

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
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-book-open"></i>
                                    Total de Sim Card que hay en el inventario
                                </div>
                                <div class="col-xl-5 col-mb-8">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body">Vodafone</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <h5><?php
                                                include("../conexion.php");

                                                $sql1 = "SELECT COUNT(*) AS total_entrada FROM entrada";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                $sql2 = "SELECT COUNT(*) AS total_salida FROM salida";
                                                $result2 = mysqli_query($conn, $sql2);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                $total_general = $row1['total_entrada'] - $row2['total_salida'];

                                                echo  $total_general;
                                                ?> </h5>


                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-5 col-mb-8">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body">Movistar</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <h5><?php
                                                include("../conexion.php");

                                                $sql1 = "SELECT COUNT(*) AS total_entrada FROM entradamovi";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                $sql2 = "SELECT COUNT(*) AS total_salida FROM salidam";
                                                $result2 = mysqli_query($conn, $sql2);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                $total_general = $row1['total_entrada'] - $row2['total_salida'];

                                                echo  $total_general;
                                                ?> </h5>


                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div>
                            <a href="#">Politicas de seguridad</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>