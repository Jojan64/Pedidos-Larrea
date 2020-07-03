<?php
// include_once("conn.php");
function usuario()
{
    $usuario = $_SESSION['usuario'];
    echo "$usuario"; //lo que se imprimirá al llamar la función
};

?>
<style> .d-none{display: none !important;}</style>
        <aside class="sidebar" role="navigation">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <!-- <div class="profile-image">
                            <img src="../plugins/images/users/hanna.jpg" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="detallecontacto.php"><i class="fa fa-user"></i> Administrador</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="cerrarsesion.php"><i class="fa fa-power-off"></i>Cerrar sesión</a></li>
                            </ul>
                        </div> -->
                        <h3>BIENVENIDO/A</h3>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"><?=usuario();?></a></p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                           <a href="escritorio.php" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Administración</span></a>
                        </li>
                        <li>
                            <a href="contactoes.php" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i>
                            <span class="hide-menu"> Clientes</span></a>
                        </li>
                        <li>
                            <a href="vehiculos.php" aria-expanded="false"><i class="icon-settings fa-fw"></i>
                            <span class="hide-menu"> Vehiculos</span></a>
                        </li>
                        <li>
                            <a href="precioa.php" aria-expanded="false"><i class="icon-notebook fa-fw"></i>
                            <span class="hide-menu"> Cotización</span></a>
                        </li>
                        <li>
                            <a href="repuestos.php" aria-expanded="false"><i class="icon-grid fa-fw"></i>
                            <span class="hide-menu"> Repuestos</span></a>
                        </li>
                        <!-- <li>
                            <a href="calend.php" aria-expanded="false"><i class="icon-calender fa-fw"></i>
                            <span class="hide-menu"> Calendario</span></a>
                        </li> -->
                        <li>
                            <a href="cerrarsesion.php" aria-expanded="false"><i class="icon-user-unfollow fa-fw"></i>
                            <span class="hide-menu"> Cerrar Sesión</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
