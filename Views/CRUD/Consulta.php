<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Consultar usuario</title>
    <link rel="shortcut icon" href="img/logo.ico">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link href="../Styles/main.css">
    <script>
      function Edit()
        {
            //ASIGNA LOS DATOS DE LA TABLA A VARIABLES PARA MANIPULAR -----------------------------------------------------------------------------------
            var table = document.getElementById("DataTable");
            var rows = table.getElementsByTagName("tr");
            for (i = 1; i < rows.length; i++) {
                row = table.rows[i];
                row.onclick = function () {
                    var dato1 = this.getElementsByTagName("td")[0].innerHTML;
                    document.getElementById("txt1").value = dato1;
                };   
            }
        }
    </script>
    <style>
        .navbar {
    box-shadow: 2px 2px 5px #000;
    opacity: 0.9;
  }
  
  .navbar .nav-item .nav-link {
    color: #fff;
  }
  
  .main-header {
    position: relative;
    background: url(../img/background.jpg);
    background-size: cover;
  }
  
  .background-overlay {
    background: rgb(31, 37, 141);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  
  .form-control, .btn{
    border-radius: 0;
  }
  
  .team, footer {
    background: #30336b;
  }
        td,th
        {
            border: 1px solid black;
        }
        .modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #76D7C4;
	background: -moz-linear-gradient(#76D7C4, #A3E4D7);
	background: -webkit-linear-gradient(#76D7C4, #A3E4D7);
	background: -o-linear-gradient(#76D7C4, #A3E4D7);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }
    </style>
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="Ingreso.html">
          <img src="../Views/CRUD/img/logo.png" style="width: 20%;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../Views/CRUD/Usuario.html">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Views/CRUD/ActualizacionUsuario.html">Actualizar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HEADER -->
    <header class="main-header">
      <div class="bg-dark text-white py-5">
        <div class="container">
          <div class="row d-flex h-100">
            <div class="col-sm-6 text-center justify-content-center align-self-center">
              <h1>
                Usuarios
              </h1>
              <p>H. Robles</p>
            </div>
            <div class="col-sm-6">
              <img src="../Views/CRUD/img/product.jpg" class="img-fluid d-none d-sm-block">
            </div>
          </div>
        </div>
      </div>
    </header>

<div class="p-7 w-100 col ml-auto bg-info" style="height: 485px; align-content: center;">
    <div class="py-5 w-100 h-100 mx-auto" >
        <table class="mx-auto" id="DataTable">
            <tr>
				      <th>ID</th>
				      <th>Nombre</th>
				      <th>Tipo de documento</th>
              <th>Fecha de nacimiento</th>
              <th>Lugar de nacimiento</th>
              <th>Genero</th>
              <th>Tipo de sangre</th>
              <th>RH</th>
              <th>EPS</th>
              <th>Nacionalidad</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Email</th>
              <th>Estado</th>
              <th>Registrado por</th>
              <th>Editar</th>
			      </tr>

					<?php

					for($i=0; $i< $retorno -> num_rows; $i++)
					{
						$fila = $retorno -> fetch_assoc();
						echo "<tr>";
						echo "<td>";
						echo $fila['ID'];
						echo "</td>";

						echo "<td>";
						echo $fila['Nombre'];
						echo "</td>";
						
						echo "<td>";
						echo $fila['Tipo_Documento'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Fecha_Nacimiento'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Lugar_Nacimiento'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Genero'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Tipo_Sangre'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['RH'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['EPS'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Nacionalidad'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Telefono'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Direccion'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Email'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['Estado'];
            echo "</td>";
                        
            echo "<td>";
						echo $fila['FK_Usuario'];
            echo "</td>";
            
            echo "<td>";
						echo "<a href='#openModal' onclick='Edit()'>Modificar</a>";
            echo "</td>";
						echo "</tr>";
					}

					?>
        </table>
    </div>
</div>
<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Actualizar</h2>
    <div class="row justify-content-center">
        <div class="col-12 p-2">
            <form action="../Controllers/ControllerUA.php"  method="POST">
				<input type="number" placeholder="Numero ID" name="txt1" id="txt1" class="form-control my-3" disabled required/>				
				<div class="input-group my-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text">Dato a Modificar</label>
                    </div>
                    <select class="custom-select form-control" name="txt2" required>
                      <option>Nombre</option>
                      <option>Tipo_documento</option>
                      <option>Fecha_nacimiento</option>
                      <option>Lugar_nacimiento</option>
                      <option>Genero</option>
                      <option>Tipo_Sangre</option>
                      <option>RH</option>
                      <option>EPS</option>
                      <option>Nacionalidad</option>
                      <option>Telefono</option>
                      <option>Direccion</option>
                      <option>Email</option>
                      <option>Clave</option>
                      <option>Estado</option>
                    </select>
				  </div>
				  <input type="text" placeholder="Valor modificado texto" name="txt3" class="form-control my-3" />
          <input type="number" placeholder="Valor modificado numerico" name="txt4" class="form-control my-3" />
          <div class="input-group my-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text">Fecha de nacimiento</label>
                    </div>
                    <input type="date" name="txt5" class="form-control" />
                  </div>
                  <input type="submit" value="Actualizar usuario" class="btn btn-dark"/>
		</form>
</div>
</div>
	</div>
</div>

    <footer>
      <div class="container p-3">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Copyright &copy; 2020 <br>
                Kevin García <br>
                Camila Parra 
            </p>
          </div>
        </div>
      </div>       
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>