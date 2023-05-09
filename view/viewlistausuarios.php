<?php
include '../business/usuariobusiness.php';
//include '../domain/usuario.php';

$usuariosbusiness = new UsuarioBusiness();
$usuarios = $usuariosbusiness->obtenerUsuarios();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

<!-- HEADER -->
<?php
include 'header.php'
?>


<div class="container text-center">
    <h1>Lista de Usuarios</h1>
</div>
<br><br>
<table id="tbusuario" class="table table-striped">
			<tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Edad</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th> 
			</tr>
		<tbody>
			<?php 

		foreach($usuarios as $row){
		    echo "<tr>";
		    echo '<td>'.$row['tbusuariocedula'].'</td>';
		    echo '<td>'.$row['tbusuarionombre'].'</td>';
		    echo '<td>'.$row['tbusuarioapellido1'].'</td>';
            echo '<td>'.$row['tbusuarioapellido2'].'</td>';
            echo '<td>'.$row['tbusuarioedad'].'</td>';
            echo '<td>'.$row['tbusuariocorreo'].'</td>';

            
            echo '<td><a href="viewregistrouser.php" class="btn btn-primary"><i class="fa fa-plus"></i></a></td>';

            echo '</tr>';
			}
?>							
</tbody>
</table>

<br><br>
<br><br><br>
<!-- FOOTER -->
<?php
    include 'footer.php';
?>
            
</body>
</html>