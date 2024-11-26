<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>TEST - Inicio</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="home.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">TEST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Edgar E. Ramirez C.</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <table id="master" class="table">
                            <thead>
                                <tr>
                                    <th>Factura</th>
                                    <th>Emitido</th>
                                    <th>Total</th>
                                    <th>Estatus</th>
                                    <th>Cliente</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody id="master_tbody">
                                <tr id="master_tbody_tr">
                                    <td data-field='numero_factura'>...</td>
                                    <td data-field='fecha_emision'>...</td>
                                    <td data-field='monto_total'>...</td>
                                    <td data-field='estatus'>...</td>
                                    <td data-field='cliente_nombre'>...</td>
                                    <td>...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>