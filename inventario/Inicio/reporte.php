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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <a class="nav-link" href="tables.php">
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
                    <h1 class="mt-4">Reporte</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../Inicio/index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Reporte</li>

                    </ol>

                    <div class="card mb-4">

                        <dialog id="alert-dialog">
                            <form class="row g-3 needs-validation" novalidate action="ingresar.php" method="POST">
                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltip01" class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" name="cantidad" id="validationTooltip01" placeholder="Cantidad" required>
                                    <div class="valid-tooltip">
                                        Digite la cantidad
                                    </div>
                                </div>
                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltip02" class="form-label">Operador</label>
                                    <input type="text" class="form-control" id="validationTooltip02" name="operador" placeholder="Operador" required>
                                    <div class="valid-tooltip">
                                        Falta el operador
                                    </div>
                                </div>
                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Salida</label>
                                    <div class="input-group has-validation">
                                        <input type="date" class="form-control" name="salida" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                        <div class="invalid-tooltip">
                                            Ingresa la fecha de salida
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip03" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="validationTooltip03" placeholder="Nombre" required>
                                    <div class="invalid-tooltip">
                                        Digite el nombre
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip03" class="form-label">Area</label>
                                    <input type="text" class="form-control" name="area" id="validationTooltip03" placeholder="Area" required>
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


                </dialog>

                <button id="show-button" class="btn btn-primary mb-1 mb-md-0">Registrar</button>



                <div class="card-body">
                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cantidad</th>
                                <th>Operador</th>
                                <th>Salida</th>
                                <th>Nombre</th>
                                <th>Area</th>
                                <th></th>

                        </thead>
                        <tbody>
                            <?php
                            include("../conexion.php");
                            $sql = $conn->query("select * from reporte");
                            while ($salida = $sql->fetch_object()) { ?>
                                <tr>
                                    <?php
                                    echo '<td><input class="form-control" type="text" name="id"  disabled value="' . $salida->id . '" ></td>';
                                    echo '<td><input class="form-control" type="int" name="id"  disabled value="' . $salida->cantidad . '" ></td>';
                                    echo '<td><input class="form-control" type="text" name="id"  disabled value="' . $salida->operador . '" ></td>';
                                    echo '<td><input class="form-control" type="date" name="id"  disabled value="' . $salida->Salida . '" ></td>';
                                    echo '<td><input class="form-control" type="text" name="id"  disabled value="' . $salida->nombre . '" ></td>';
                                    echo '<td><input class="form-control" type="text" name="id"  disabled value="' . $salida->area . '" ></td>';
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

            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="../Inicio/js/prueba.js"></script>
</body>

</html>