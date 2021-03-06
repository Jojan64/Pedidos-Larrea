<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if ($_SESSION["loggedin"] != true) {
    header("location: login.php");
} else {
    // echo("entraste");
}
class conectar
{
    public function conexion()
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'import');
        $conexion->set_charset('utf8');
        return $conexion;
    }
}
$obj      = new conectar();
$conexion = $obj->conexion();
$sql      = "SELECT id_clientes,
    nombre,
    email,
    telefono,
    direccion
    from clientes";
$result = mysqli_query($conexion, $sql);

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>PUNTO FRIO CLIENTES</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="../plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- ===== Animation CSS ===== -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="../plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            <img src="../plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <?php include 'menuUsuario.php';?>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">LISTA DE CLIENTES</h3>
                            <p class="text-muted m-b-30">Exportar datos : Copy, Excel, CSV, PDF & Print</p>
                                <div id="tablaDatatable">
                                    <div class="table-responsive">
                                        <table class="display nowrap" id="iddatatable">
                                            <thead >
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>Email</td>
                                                    <td>Teléfono</td>
                                                    <td>Dirección</td>
                                                   
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>Email</td>
                                                    <td>Teléfono</td>
                                                    <td>Dirección</td>
                                                    
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                   while ($mostrar = mysqli_fetch_row($result)) {
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $mostrar[1] ?></td>
                                                        <td><?php echo $mostrar[2] ?></td>
                                                        <td><?php echo $mostrar[3] ?></td>
                                                        <td><?php echo $mostrar[4] ?></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        <!-- Modal agregar-->
                        <div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"            aria-hidden="true"> 
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agrega nuevos clientes</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="frmnuevo">
                                            <label for="">Nombre</label>
                                            <input type="text" class="form-control input-group-sm" id="nombre" name="nombre">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control input-group-sm" id="email" name="email">
                                            <label for="">Teléfono</label>
                                            <input type="number" class="form-control input-group-sm" id="telefono" name="telefono">
                                            <label for="">Dirección</label>
                                            <input type="text" class="form-control input-group-sm" id="direccion" name="direccion">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" id="btnAgregarnuevo" class="btn btn-success">Agregar nuevo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal editar-->
                        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Actualizar cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="frmnuevoU">
                                            <input type="text" hidden="" id="idjuego" name="idjuego">
                                            <label for="">Nombre</label>
                                            <input type="text" class="form-control input-group-sm" id="nombreU" name="nombreU">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control input-group-sm" id="emailU" name="emailU">
                                            <label for="">Teléfono</label>
                                            <input type="number" class="form-control input-group-sm" id="telefonoU" name="telefonoU">
                                            <label for="">Dirección</label>
                                            <input type="text" class="form-control input-group-sm" id="direccionU" name="direccionU">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-success" id="btnActualizar">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ===== Right-Sidebar ===== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                            <div class="r-panel-body">
                                <ul class="hidden-xs">
                                    <li><b>Layout Options</b></li>
                                    <li>
                                        <div class="checkbox checkbox-danger">
                                            <input id="headcheck" type="checkbox" class="fxhdr">
                                            <label for="headcheck"> Fix Header </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-warning">
                                            <input id="sidecheck" type="checkbox" class="fxsdr">
                                            <label for="sidecheck"> Fix Sidebar </label>
                                        </div>
                                    </li>
                                </ul>
                                <ul id="themecolors" class="m-t-20">
                                    <li><b>With Light sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                    <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                    <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                    <li class="db"><b>With Dark sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                    <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                    <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                                </ul>
                                <ul class="m-t-20 chatonline">
                                    <li><b>Chat option</b></li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer t-a-c">
                © 2019 PUNTO FRIO
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="js/sidebarmenu.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="../plugins/components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <script>

    //DATOS REALES DE TABLA
    $(document).ready(function() {
        $('#iddatatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            language:{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    } );
    //FIN DATOS REALES DE TABLA
    //BOTON AGREGAR NUEVO REGISTRO
       $('#btnAgregarnuevo').click(function(){
           datos = $('#frmnuevo').serialize();

           $.ajax({
               type:"POST",
               data:datos,
               url:"procesos/agregarc.php",
               success:function(r){
                   if(r==1){
                    $('#frmnuevo')[0].reset();
                     $('#tablaDatatable');
                     $('.close').trigger('click');
                     location.reload();
                     alertify.success("Agregado con exito :D");
                   }else{
                    alertify.error("Fallo al agregar :C");
                   }
               }
            });
       });
    function agregaFrmActualizar(idjuego){
        $.ajax({
              type:"POST",
              data:"idjuego=" + idjuego,
              url:"procesos/obtenDatosc.php",
              success:function(r){
                datos=jQuery.parseJSON(r);
                $('#idjuego').val(datos['id_clientes']);
                $('#nombreU').val(datos['nombre']);
                $('#emailU').val(datos['email']);
                $('#telefonoU').val(datos['telefono']);
                $('#direccionU').val(datos['direccion']);
              }
        });
    }
    //FIN BOTON AGREGAR
    //BOTON AGREGAR
       $('#btnActualizar').click(function(){
           datos = $('#frmnuevoU').serialize();

           $.ajax({
               type:"POST",
               data:datos,
               url:"procesos/actualizarc.php",
               success:function(r){
                   if(r==1){
                     $('#tablaDatatable');
                     $('.close').trigger('click');
                     location.reload();
                     alertify.success("Actualizado con exito :D");
                   }else{
                    alertify.error("Fallo al actualizar :C");
                   }
               }
            });
       });
    function eliminarDatos(idjuego){
    $.ajax({
              type:"POST",
              data:"idjuego=" + idjuego,
              url:"procesos/eliminarc.php",
              success:function(r){
                if(r==1){
                     $('.close').trigger('click');
                     location.reload();
                    // alertify.success("Eliminado con exito !");
                }else{
                    alertify.error("No se pudo eliminar...");
                }
              }
            });
             alertify.confirm('Eliminar un juego', '¿ Seguro de eliminar este juego :( ?',
                  function(){

         }
            , function(){
      });
    }
    //FIN BOTON AGREGAR
    $(function() {
        $('#myTable').DataTable();

        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="6">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>

</html>