<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Entrada | Sim Card</title>
    <link rel="shortcut icon" href="../Inicio/estilos/img/icono.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../Inicio/estilos/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <img class="navbar-brand ps-3" src="../Inicio/estilos/img/logoaplicacionq.png" alt="" href="./index.php">

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">configuración</a></li>
                    <li><a class="dropdown-item" href="../Inicio/index.php">Actividad de registro</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../login.php">Cerrar sesión</a></li>
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
                                            <a class="nav-link" href="../Inicio/salidavoda.php">salida</a>

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
                    <h1 class="mt-4">Inventario Movistar</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../Inicio/index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Entrada</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Se llevará a cabo un inventario general en todas las Sim Card. Para garantizar un proceso ágil y preciso, te pedimos que revises tu stock con anticipación y reportes cualquier discrepancia, Deseas exportar el inventario en formato excel
                            <a href="./excelm.php" class="btn-small blue"> <img src="../Inicio/estilos/img/excel.webp" width="40" height="40">Exportar</a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Reporte de inventario
                        </div>
                        <div class="card-body">
                            <table class="table" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ICCID</th>
                                        <th>FECHA</th>

                                </thead>
                                <tbody>
                                    <?php
                                    include("../conexion.php");
                                    $sql = $conn->query("select * from entradamovi");
                                    while ($entrada = $sql->fetch_object()) { ?>
                                        <tr>
                                            <?php

                                            echo '<td><input class="form-control" type="text" name="id"  disabled value="' .  $entrada->id . '" ></td>';
                                            echo '<td><input class="form-control" type="text" name="iccid" disabled value="' . $entrada->iccid . '" ></td>';
                                            echo '<td><input class="form-control" type="date" name="fecha_nac" disabled value="' . $entrada->fecha_nac . '"></td>';
                                            echo '<td><a class="btn btn-danger btn btn-primary mb-1 mb-md-0"" href="../procesarm.php?id=' . $entrada->id . '">Salida</a></td>';
                                            ?>


                                        </tr>
                                    <?php }
                                    ?>

                                    </tr>
                                </tbody>
                            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>