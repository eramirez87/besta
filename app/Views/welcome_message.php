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
    <script src="https://kit.fontawesome.com/60d09f2d83.js" crossorigin="anonymous"></script>
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
                        <table id="master" class="table table-sm table-hover">
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
                                    <td data-field='fecha_emision_LATAM'>...</td>
                                    <td data-field='monto_total_LATAM'>...</td>
                                    <td data-field='estatus'>...</td>
                                    <td data-field='cliente_nombre'>...</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-regular fa-window-maximize"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel">Crear/Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="modal-body" id="modal-form" onsubmit="return submitForm(event)">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Cliente</label>
                        <select name="cliente_id" class="form-control"></select>
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label>Factura</label>
                      <input type="number"
                        class="form-control" name="numero_factura" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Si existe edita, si no, crea</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label>Fecha de emision</label>
                      <input type="date"
                        class="form-control" name="fecha_emision" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label>Total</label>
                      <input type="number" step="0.01"
                        class="form-control" name="monto_total" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Estatus</label>
                        <select name="estatus" class="form-control">
                            <option value="pendiente">pendiente</option>
                            <option value="pagada">pagada</option>
                            <option value="cancelada">cancelada</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button form="modal-form" type="submit" class="btn btn-primary">Save changes</button>
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