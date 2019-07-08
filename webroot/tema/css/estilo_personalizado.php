<?php
/*Tema por default*/
$color_primario = '#8c8a8a'; //Gris
$color_secundario = '#f4930a'; //Naranja
$texto_enlaces = $color_secundario;
$titulo_navbar = $color_primario;
$texto_breadcrumb = '#fff';
$titulo_panelheading = '#fff';

echo 
"<style>

/*Breadcrumb*/

	.breadcrumb {
	  background-color: $color_secundario;
	}

	.breadcrumb > .active {
	  color: $texto_breadcrumb;
	}

/* Barra de navegación y menu lateral*/

	.navbar-default {
	  background-color: #f8f8f8;
	}

	.navbar {
		border: 1px solid #E7E7E7;
	}

	#wrapper {
	    width: 100%;
	    background-color: #f8f8f8;
	}

	.navbar-default .navbar-brand {
	  color: $titulo_navbar;
	}

	.navbar-default .navbar-brand:hover,
	.navbar-default .navbar-brand:focus {
	  color: $titulo_navbar;
	  background-color: none;
	}
	.navbar-default .navbar-text {
	  color: $titulo_navbar;
	}
	.navbar-default .navbar-nav > li > a {
	  color: $titulo_navbar;
	}
	.navbar-default .navbar-nav > li > a:hover,
	.navbar-default .navbar-nav > li > a:focus {
	  color: $titulo_navbar;
	  background-color: #E7E7E7;
	}


/*Menu desplegable*/

	.dropdown-menu > li > a {
	  color: $texto_enlaces;
	}

	.dropdown-menu > li > a:hover,
	.dropdown-menu > li > a:focus {
	  color: $texto_enlaces;
	  background-color: #E7E7E7;
	}

	.nav .open > a,
	.nav .open > a:hover,
	.nav .open > a:focus {
	  background-color: $color_primario;
	  border-color: #E7E7E7;
	}

/*Paneles Default*/

	.panel-default>.panel-heading{
		color: $titulo_panelheading;
		background-color: $color_primario;
		border-color: #E7E7E7;
	}

/*Enlaces*/

	a{
		color: $texto_enlaces;
		text-decoration:none
	}

	a:focus,a:hover{
		color: $texto_enlaces;
		/*text-decoration:underline*/
	}
	.navbar-top-links .dropdown-menu li a {
		color: $texto_enlaces;
	}
	.navbar-top-links .dropdown-menu li a:hover {
		color: $texto_enlaces;
	}

	.sidebar ul li {
    	border-bottom: 1px solid #E7E7E7;
	}

	
/*Todos los componentes que usan color primario (25)*/

	.bg-primary{
		color: #fff;
		background-color: $color_primario;
	}

	a.bg-primary:hover{
		background-color: $color_primario;
	}

	.btn-primary{
		color:#fff;
		background-color:$color_primario;
		border-color:$color_primario;
	}

	.btn-primary.active,.btn-primary.focus,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open>.dropdown-toggle.btn-primary{
		color:#fff;
		background-color:$color_primario;
		border-color:$color_primario
	}

	.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{
		background-image:none
	}

	.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled.focus,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled].focus,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{
		background-color:$color_primario;
		border-color:$color_primario;
	}

	.btn-primary .badge{
		color:$color_primario;
		background-color:#fff
	}

	.btn-link{
		font-weight:400;
		color:$color_primario;
		border-radius:0
	}
	.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{
		color: $texto_enlaces;
		text-decoration:none;
		background-color:$color_primario;
		outline:0
	}

	.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{
		background-color:#eee;
		border-color:$color_primario
	}

	.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{
		color:$texto_enlaces;
		background-color:$color_primario
	}

	.pagination>li>a,.pagination>li>span{
		color: $color_primario;
	}

	.pagination > li > a:hover,
	.pagination > li > span:hover,
	.pagination > li > a:focus,
	.pagination > li > span:focus {
	  color: $color_primario;
	}

	.pagination > .active > a,
	.pagination > .active > span,
	.pagination > .active > a:hover,
	.pagination > .active > span:hover,
	.pagination > .active > a:focus,
	.pagination > .active > span:focus {
	  color: $color_secundario;
	}

	.pagination > .disabled > span,
	.pagination > .disabled > span:hover,
	.pagination > .disabled > span:focus,
	.pagination > .disabled > a,
	.pagination > .disabled > a:hover,
	.pagination > .disabled > a:focus {
	  color: #999999;
	  background-color: #ffffff;
	  border-color: #dddddd;
	  cursor: not-allowed;
	}

	.label-primary{
		background-color:$color_primario
	}

	.list-group-item.active>.badge,.nav-pills>.active>a>.badge{
		color:$color_primario;
		background-color:#fff
	}

	.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{
		z-index:2;
		color:#fff;
		background-color:$color_primario;
		border-color:$color_primario;
	}

	.panel-primary{
		border-color:$color_primario;
	}

	.panel-primary>.panel-heading{
		color:$titulo_panelheading;
		background-color:$color_primario;
		border-color:#E7E7E7;
	}

	.panel-primary>.panel-heading+.panel-collapse>.panel-body{
		border-top-color:$color_primario;
	}

	.panel-primary>.panel-heading .badge{
		color:$color_primario;
		background-color:#fff;
	}

	.panel-primary>.panel-footer+.panel-collapse>.panel-body{
		border-bottom-color:$color_primario;
	}

	.btn.focus,.btn:focus,.btn:hover{
		color:#dddddd;
	}

	/*Tablas*/
	.table-striped>tbody>tr:nth-of-type(odd){
		background-color:#f9f9f9;
	}

	.table-striped>tbody>tr:nth-of-type(even){
		background-color:#fff;
	}

	/*Botones Default*/
	.btn-default {
	  color: #fff;
	  background-color: #c5c4c4;
	  border-color: #c5c4c4;
	}
	.btn-default:hover,
	.btn-default:focus,
	.btn-default.focus,
	.btn-default:active,
	.btn-default.active,
	.open > .dropdown-toggle.btn-default {
	  color: #ffffff;
	  background-color: #bdbcbc;
	  border-color: #bdbcbc;
	}

	/*Botones predefinidos*/

	/*Danger [Rojo]*/

	.btn-danger {
	  color: #ffffff;
	  background-color: #ff0808;
	  border-color: #ff0808;
	}
	.btn-danger:hover,
	.btn-danger:focus,
	.btn-danger.focus,
	.btn-danger:active,
	.btn-danger.active,
	.open > .dropdown-toggle.btn-danger {
	  color: #ffffff;
	  background-color: #b30606;
	  border-color: #b30606;
	}

	/*Info [Morado / Azul]*/

	.btn-info {
	  color: #ffffff;
	  background-color: #04ade4;
	  border-color: #04ade4;
	}
	.btn-info:hover,
	.btn-info:focus,
	.btn-info.focus,
	.btn-info:active,
	.btn-info.active,
	.open > .dropdown-toggle.btn-info {
	  color: #ffffff;
	  background-color: #018fbd;
	  border-color: #018fbd;
	}

	/*Warning [Naranja / Amarillo]*/

	.btn-warning {
	  color: #ffffff;
	  background-color: #f47301;
	  border-color: #f47301;
	}

	.btn-warning:hover,
	.btn-warning:focus,
	.btn-warning.focus,
	.btn-warning:active,
	.btn-warning.active,
	.open > .dropdown-toggle.btn-warning {
	  color: #ffffff;
	  background-color: #c05c02;
	  border-color: #c05c02;
	}
</style>";
?>