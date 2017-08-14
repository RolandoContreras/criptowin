<!DOCTYPE html>
<html lang="en">
<!--START HEAD-->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="author" content="ibisar">
    <meta name="description" content="Equipo con la visión de ayudar a las personas en una superación personal y económica">
    <meta name="keywords" content="ibisar,bisar,multinivel,binario,negocio,mlm,dinero,bitcoin,millones,educacion,futuro ">
    <link rel="icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <meta name="robots" CONTENT="noindex, nofollow" />
    <title>I BISAR</title>
       <!-- FONT AWESOME-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/font-awesome.min.css';?>">
       <!-- SIMPLE LINE ICONS-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
       <!--CSS ONE-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/one/style_one.css';?>">
       <!-- =============== BOOTSTRAP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/bootstrap.css';?>" id="bscss">
       <!-- SWEET ALERT-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/sweetalert.css';?>">
       <!-- DATATABLES-->
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.colVis.css';?>">
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.bootstrap.css';?>">
       <!-- =============== APP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/app.css';?>" id="maincss">
       <!-- =============== APP TEMAS ===============-->
       <link id="autoloaded-stylesheet" rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/theme-e.css';?>">
       <script src="https://use.fontawesome.com/684aca07c3.js"></script>
<script type="text/javascript">
    var site = '<?php echo site_url();?>';
</script>
</head>

<body>
   <div class="wrapper">
      <!--START HEADER AND ASIDE-->
      
      <!-- top navbar-->  
<header class="topnavbar-wrapper">
	        <!-- START Top Navbar-->
	        <nav role="navigation" class="navbar topnavbar">
	            <!-- START navbar header-->
	            <div class="navbar-header">
	               	<a href="#" class="navbar-brand">
	                  	<div class="brand-logo">
                                    <img src="<?php echo site_url().'static/page_front/images/bisar_logo_text.png';?>" alt="Logo" class="img-responsive">
	                  	</div>
	                  	<div class="brand-logo-collapsed">
                                    <img src="<?php echo site_url().'static/page_front/images/bisar_logo.png';?>" style="max-height: 40px;" alt="App Logo" class="img-responsive">
	                  	</div>
	               	</a>
	            </div>
	            <div class="nav-wrapper">
	               <!-- START Left navbar-->
	               	<ul class="nav navbar-nav">
	                  	<li>
	                     	<!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
	                     	<a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
	                        	<em class="icon-list"></em>
	                     	</a>
	                     	<!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
	                     	<a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
	                        	<em class="icon-list"></em>
	                     	</a>
	                  	</li>
                        </ul>
	            <!-- START Right Navbar-->
	               	<ul class="nav navbar-nav navbar-right">
<!--                            <li>
                                <a href="#" title="Listado de archivos para descargar">
                                    <em class="icon-cloud-download"></em>
                                </a>
                            </li>-->
	                  	<!-- START Alert menu-->
                                
                                <!--//MENSAJE-->
                                
<!--                            <li class="dropdown dropdown-list">
                                <a href="#">
                                    <em class="icon-envelope-open"></em>
                                    <div class="count-mensajes label label-danger"></div>
                                </a>
                            </li>-->
                            <li>
                                <a href="<?php echo site_url().'login/logout';?>" title="Salir">
                                   <em class="icon-logout"></em>
                                </a>
                            </li>
	                  <!-- END Offsidebar menu-->
	               </ul>
	               <!-- END Right Navbar-->
	            </div>
	         </nav>
	         <!-- END Top Navbar-->
	      </header>
	      	<aside class="aside">
	         	<!-- START Sidebar (left)-->
	         	<div class="aside-inner">
	            	<nav data-sidebar-anyclick-close="" class="sidebar">
	               	<!-- START sidebar nav-->
	               		<ul class="nav">
                                    <!-- START user info-->
                                    <li class="has-user-block">
                                        <div id="user-block" class="">
                                            <div class="item user-block">
                                            <!-- User picture-->
                                                <div class="user-block-picture">
                                                <div class="user-block-status">
                                                <a><img src="<?php echo site_url().'static/page_front/images/bisar_logo.png';?>" alt="logo" class="img-thumbnail "></a>
                                                <?php if($_SESSION['customer']['active'] == 1){ ?>
                                                    <div class="circle circle-success circle-lg"></div>
                                                <?php }else{ ?>
                                                    <div class="circle circle-danger circle-lg"></div>
                                                <?php } ?>
                                                        
                                                </div>
                                                </div>
                                                    <!-- Name and Job-->
                                                <div class="user-block-info">
                                                <span class="user-block-name">Hola, &nbsp;<?php echo first_capital_letter($_SESSION['customer']['name'])?></span>
                                                <span class="user-block-role">
                                                    <?php if($_SESSION['customer']['active']==1){ ?>
                                                        <span class="label label-success">
                                                            <em class="icon-star"></em> Activo
                                                        </span>
                                                    <?php }else{ ?>
                                                        <span class="label label-danger">
                                                            <em class="icon-star"></em> Inactivo
                                                        </span>
                                                    <?php } ?>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                		<!-- END user info-->
                                    <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $infoproductos = "";
                                    $style_misdatos = "";
                                    $style_upgrade = "";
                                    $style_comisiones = "";
                                    $style_information_center = "";
                                    $style_mired = "";
                                    $style_holding = "";
                                    $style_billetera = "";
                                    $style_pagos = "";
                                    if(isset($url[1])){
                                        switch ($url[1]) {
                                            ////////
                                                    case "misdatos":
                                                        $style_misdatos = "active";
                                                        break;
                                                    case "info-productos":
                                                        $infoproductos = "active";
                                                        break;
                                                    case "upgrade":
                                                        $style_upgrade = "active";
                                                        break;
                                                    case "comisiones":
                                                        $style_comisiones = "active";
                                                        break;
                                                    case "balance":
                                                        $style_comisiones = "active";
                                                        break;
                                                    case "unilevel":
                                                        $style_mired = "active";
                                                        break;
                                                    case "binario":
                                                        $style_mired = "active";
                                                        break; 
                                                    case "centro-informacion":
                                                        $style_information_center = "active";
                                                        break;
                                                    case "billetera":
                                                        $style_billetera = "active";
                                                        break;
                                                    case "holding":
                                                        $style_holding = "active";
                                                        break;
                                                    case "pagos":
                                                        $style_pagos = "active";
                                                        break;
                                                    default:
                                                         $title = "Inicio";
                                            }
                                    }else{
                                        $style_inicio = "active";
                                    }?>    
                                    <li class="nav-heading">
                                        <span>Menu de Navegación</span>
                                    </li>
                                    
	                  		<li class="<?php echo $style_inicio?>">
                                            <a href="<?php echo site_url().'backoffice'?>" title="Inicio">
                                            <em class="fa fa-tachometer fa-lg" aria-hidden="true"></em>
                                            <span>Tablero</span>
	                     		</a>
                                            
	                  		</li>
                                        <li class="<?php echo $style_misdatos ?>">
                                            <a href="javascript:void(0);" title="Mi Datos">
                                            <em class="fa fa-address-book fa-lg" aria-hidden="true"></em>
                                            <span>Mi Perfil</span>
	                     		</a>
	                  		</li>
                                        <li class="<?php echo $style_upgrade ?>">
                                            <a href="javascript:void(0);" title="Upgrade">
                                            <em class="fa fa-book fa-lg" aria-hidden="true"></em>
                                            <span>Mis Cursos</span>
	                     		</a>
	                  		</li>
                                        <li class="<?php echo $style_information_center;?>">
                                            <a href="javascript:void(0);" title="Billetera">
                                                <em class="fa fa-newspaper-o fa-lg" aria-hidden="true"></em>
                                                <span>Noticias</span>
                                            </a>
	                  		</li>
                                        <li class="<?php echo $style_information_center;?>">
                                            <a href="javascript:void(0);" title="Billetera">
                                                <em class="fa fa-tasks fa-lg" aria-hidden="true"></em>
                                                <span>Programas</span>
                                            </a>
	                  		</li>
	                  		<li class="<?php echo $style_comisiones;?>">
                                            <a href="javascript:void(0);" title="Comisiones" data-toggle="collapse">
			                        <em class="fa fa-certificate fa-lg"></em>
			                        <span>Certificaciones</span>
			                    </a>
	                  		</li>
                                        <li class="<?php echo $style_comisiones;?>">
                                            <a href="javascript:void(0);" title="Comisiones" data-toggle="collapse">
			                        <em class="fa fa-sign-out fa-lg"></em>
			                        <span>Salir</span>
			                    </a>
	                  		</li>
	               		</ul>
	               	<!-- END sidebar nav-->
	            	</nav>
	         	</div>
	         	<!-- END Sidebar (left)-->
	      	</aside>
      		<!-- offsidebar-->
      <!-- Main section-->
            <?php echo $body;?> 
      <!--START FOOTER-->
<footer>
    <span>Inversiones Bitshare S.A.C.   &copy; 2016 - BitShare</span><br>
    <!--<span>&copy; 2017 - BitShare</span>-->
</footer>
   </div>
		   <!-- MODERNIZR-->
		   <script src="<?php echo site_url().'static/backoffice/js/modernizr.js';?>"></script>
		   <!-- JQUERY-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.js';?>"></script>
		   <!-- BOOTSTRAP-->
		   <script src="<?php echo site_url().'static/backoffice/js/bootstrap.js';?>"></script>
		   <!-- STORAGE API-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.storageapi.js';?>"></script>
		   <!-- JQUERY EASING-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.easing.js';?>"></script>
		   <!-- ANIMO-->
		   <script src="<?php echo site_url().'static/backoffice/js/animo.js';?>"></script>
		   <!-- SLIMSCROLL-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.slimscroll.min.js';?>"></script>
		   <!-- LOCALIZE-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.jquery.localize.js';?>"></script>
		   <!-- RTL demo
		   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
		   <!-- SPARKLINE-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.sparkline.min.js';?>"></script>
		   <!-- PARSLEY-->
		   <script src="<?php echo site_url().'static/backoffice/js/parsley.min.js';?>"></script>
                   <!-- SWEET ALERT-->
                   <script src="<?php echo site_url().'static/backoffice/js/sweetalert.min.js';?>"></script>	
		   <!-- FLOT CHART-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.tooltip.min.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.resize.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.pie.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.time.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.categories.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.flot.spline.min.js';?>"></script>
		   <!-- CLASSY LOADER-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.classyloader.min.js';?>"></script>
		   <!-- MOMENT JS-->
                   <script src="<?php echo site_url().'static/backoffice/js/moment-with-locales.min.js';?>"></script>
		   <!-- DATATABLES-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.dataTables.min.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.colVis.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrap.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrapPagination.js';?>"></script>   
		   <!-- =============== APP SCRIPTS ===============-->
		   <script src="<?php echo site_url().'static/backoffice/js/app.js';?>"></script>
		   <script src="<?php echo site_url().'static/backoffice/js/afiliados.js';?>"></script>
</body>
</html>