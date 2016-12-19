<?php
include("../../check.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FenelonCOM | Ajouter Devoir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fencom.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/jquery.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav layout-boxed">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand"><b>Fenelon</b>COM</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Tableau de bord</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saisir<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Devoir</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulation<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Tous les devoir</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Par classe</a></li>
                                <li><a href="#">Par eleve</a></li>
                                <li><a href="#">Par matiere</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Rechercher (WIP)" disabled>
                        </div>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#"><?php echo $user_check ?></a>
                        </li>
                        <li>
                            <a href="/logout.php"><i class="fa fa-sign-out"></i></a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="display-1">Creation d'un devoir</h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-stacked nav-pills thumbnail setup-panel">
                        <li class="active" style="vertical-align: middle"><a href="#general">
                                <h4 class="list-group-item-heading">General</h4>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;">
                            <a href="#com1-1">
                                <h4 class="list-group-item-heading">Domaine 1</h4>
                                <p class="list-group-item-text">Langue Francaise a l'oral et a l'ercit</p>
                            </a>
                        </li>
                        <li class="disabled" style="vertical-align: middle;  float: none;">
                            <a href="#com1-2">
                                <h4 class="list-group-item-heading">Domaine 1</h4>
                                <p class="list-group-item-text">Langue mathematique, scientifique et informatiques</p>
                            </a>
                        </li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com1-3">
                                <h4 class="list-group-item-heading">Domaine 1</h4>
                                <p class="list-group-item-text">Langue etrangeres et regionales</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com1-4">
                                <h4 class="list-group-item-heading">Domaine 1</h4>
                                <p class="list-group-item-text">Langue du arts et du corps</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com2-1">
                                <h4 class="list-group-item-heading">Domaine 2</h4>
                                <p class="list-group-item-text">Methode et outils pour apprendre</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com3-1">
                                <h4 class="list-group-item-heading">Domaine 3</h4>
                                <p class="list-group-item-text">Formation de la personne et du citoyen</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com4-1">
                                <h4 class="list-group-item-heading">Domaine 4</h4>
                                <p class="list-group-item-text">Systemes naturels et systemes techniques</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#com5-1">
                                <h4 class="list-group-item-heading">Domaine 5</h4>
                                <p class="list-group-item-text">Representation du monde et l'actvite humaine</p>
                            </a></li>
                        <li class="disabled" style="vertical-align: middle;  float: none;"><a href="#verify">
                                <h4 class="list-group-item-heading">Verfication</h4>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <form action="../../adddevoirsecure.php" method="post" novalidate>
                        <input type="hidden" name="checkexist" value="0"/>
                        <div class="row setup-content " id="general">
                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title ">General</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <dl class="dl-horizontal center-block" style="width:70%">
                                            <br>
                                            <dt>Intitule du devoir</dt>
                                            <dd><input type="email" class="form-control" id="inputEmail3"
                                                       placeholder="Email" name="titledevoir"></dd>
                                            <br>
                                            <dt>Classe</dt>
                                            <dd>
                                                <select class="form-control"  onchange="loadtable(this.value);" name="class">
                                                    <option selected value="" disabled>Selectionner une classe</option>
                                                    <option>3A</option>
                                                    <option>3B</option>
                                                    <option>3C</option>
                                                    <option>4D</option>
                                                </select>
                                            </dd>
                                            <br>
                                            <dt>Malesuada porta</dt>
                                            <dd><input type="email" class="form-control" id="inputEmail3"
                                                       placeholder="Email"></dd>
                                            <br>
                                            <dt>Felis euismod semper eget lacinia</dt>
                                            <dd><input type="email" class="form-control" id="inputEmail3"
                                                       placeholder="Email">
                                            </dd>
                                        </dl>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com1-1" class="btn btn-primary btn-lg">
                                            Activate com1-1
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content " id="com1-1">
                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 1 - Les languages pour penser et
                                            communiquer<br><br>Langue française à l'oral et à l'écrit</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom1-1"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com1-2" class="btn btn-primary btn-lg">
                                            Activate 1-2
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content " id="com1-2">
                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 1 - Les languages pour penser et
                                            communiquer<br><br>Langues mathématiques, scientifiques et informatiques
                                        </h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom1-2"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com1-3" class="btn btn-primary btn-lg">
                                            Activate 1-3
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content " id="com1-3">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 1 - Les languages pour penser et
                                            communiquer<br><br>Langues étrangères et régionales.
                                        </h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom1-3"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com1-4" class="btn btn-primary btn-lg">
                                            Activate 1-4
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content " id="com1-4">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 1 - Les languages pour penser et
                                            communiquer<br><br>Langues des arts et du corps.</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom1-4"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com2-1" class="btn btn-primary btn-lg">
                                            Activate 2-1
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row setup-content " id="com2-1">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 2 - Méthodes et outils pour apprendre
                                        </h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom2-1"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com3-1" class="btn btn-primary btn-lg">
                                            Activate 3-1
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row setup-content " id="com3-1">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 3 - Formation de la personne et du
                                            citoyen</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom3-1"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body
                                    -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com4-1" class="btn btn-primary btn-lg">
                                            Activate 4-1
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row setup-content " id="com4-1">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 4 - Les systèmes naturels et les systèmes
                                            techniques</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom4-1"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-com5-1" class="btn btn-primary btn-lg">
                                            Activate 5-1
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row setup-content " id="com5-1">
                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Domaine 5 - Représentations du monde et l'actiivité
                                            humaine</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="tablecom5-1"
                                               class="table table-bordered table-striped table-responsive hover dataTable text-center"
                                               role="grid" style="width:70%">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Eleve</th>
                                                <th>Classe</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" id="activate-verify" class="btn btn-primary btn-lg">
                                            Activate verify
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content " id="verify">

                            <div class="col-md-12 col-xs-12">
                                <div class="box box-solid box-primary">
                                    <div class="box-header text-center">
                                        <h3 class="box-title">Verification</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-lg">finish</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.7
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- table js -->
<script src="../../js/jquery.steps.js"></script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="/plugins/datatables/jquery.dataTables.min.js"></script>
</body>
</html>
