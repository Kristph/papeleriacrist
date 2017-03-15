<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript">
          $(document).ready(function() {
           $('select').material_select();
          });
    </script>
</head>
<body>
	<nav>
	  <div class="nav-wrapper dark-primary-color">
	    <a class="brand-logo" style="margin-left: 15px">keyBin</a>
	    <ul class="right hide-on-med-and-down">
	        <li><a href="/users">Usuarios</a></li>
	        <li><a href="/storage">Inventario</a></li>
	        <li><a href="/buys">Compras</a></li>
	        <li><a href="/sells">Ventas</a></li>
	    </ul>
	  </div>
	</nav>
	



		
		@yield('content')
	
	




	<script src="/js/app.js"></script>
	<script src="https://use.fontawesome.com/fafb7367a1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>
</html>