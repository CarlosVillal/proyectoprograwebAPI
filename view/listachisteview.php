<?php
include '../business/agregarchistebusiness.php';
//include '../domain/usuario.php';

$agregarchistebusiness = new AgregarchisteBusiness();
$chistes = $agregarchistebusiness->obtenerChistes();
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
    <h1>Lista de chistes de usuarios</h1>
</div>
<br><br>
<table id="tbusuario" class="table table-striped">
			<tr>
            <th>Chistes</th>
			</tr>
		<tbody>
			<?php 

		foreach($chistes as $row){
		    echo "<tr>";
		    echo '<td>'.$row['tbchistetexto'].'</td>';
	
            
           

            echo '</tr>';
			}
?>							
</tbody>
</table>
<br><br><br>
<!-- FOOTER -->
<?php
    include 'footer.php';
?>
            
</body>
</html>