<?php  include "Coneccion.php"; ?>

 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
			<div ID ="base">
		
<section>

<ul Class="juan">
<li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
 <li><a href="hhh.php">inicio</a></li>
		<?php
		$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 1 or tipo_eleccion1=2 or tipo_eleccion1=3  ",$Coneccion);
@$array_consulta = mysql_fetch_array($consulta);
$fecha=$array_consulta["fecha"];

if ($fecha<date("Y") ) {
echo "si se puede abrir";
echo $fecha;
echo "<li><a href='Tipo de eleccion t.php'> Apertura de elecciones</a>
";
}else{
	echo "";
}
?>
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
		<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
</li>
		<li>Inscricion de candidato<ul> 
		<?php
		$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario inscrincion de Presidentes.php'>Inscripcion Candidato a Presidente</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionPre.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 2 AND fecha= '".date("Y")."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscripcion Diputados.php'>Inscripcion Candidato a Diputado</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionD.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscrincion de Alcaldes.php'>Inscripcion Candidato Alcalde</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionA.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}

?>
		</ul>
		</li>
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
	</ul>
	<br>
</section>
</div>
<br>
<br>
<br>
<?php
include './Clases/Coneccion.php';
include './inscripcionDcontrolador.php';
$insDiputado = new inscripcionDcontrolador();
$accion= $_REQUEST['accion'];

@$dui=$_REQUEST['DUI'];
$rutaEnServidor='Imagenes';
@$rutaTemporal=$_FILES['imagen']['tmp_name'];
@$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
switch ($accion) {
	case 'save':
	if (strlen($dui)<=9){
	echo "<script type=\"text/javascript\">alert(\"no ha escrito completamente el Dui  \");window.location.assign('Formulario Inscrincion de Alcaldes.php');</script>";
}else{
		if (isset($_REQUEST['bot'])) {
			$insDiputado->setId('NULL');
			$insDiputado->setDui($_REQUEST['DUI']);
			$insDiputado->setNombre($_REQUEST['nombre']);
			$insDiputado->setApellido($_REQUEST['apellido']);
			$insDiputado->setFoto($rutaDestino);
			$insDiputado->setDepartamento($_REQUEST['Departamento']);
			$insDiputado->setCandidatura($_REQUEST['hola']);
			$insDiputado->setCargo($_REQUEST['Cargo']);
			$insDiputado->setPartido($_REQUEST['Partido']);
			$datosObj=array($insDiputado->getId(),
							$insDiputado->getDui(),
							$insDiputado->getNombre(),
							$insDiputado->getApellido(),
							$insDiputado->getFoto(),
							$insDiputado->getDepartamento(),
							$insDiputado->getCandidatura(),
							$insDiputado->getCargo(),
							$insDiputado->getPartido());

			print $insDiputado->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorinscripcionD.php?accion=con\'>Ver datos </a>';
		}else{
			print 'no se han enviado datos' ;
		}
	}
		break;
	case 'con':
		$sql = 'SELECT I.id_inscripcion_candidato AS Codigo,I.dui AS DUI,I.nombres AS Nombres,I.apellidos AS Apellido,D.departamento AS Departamento,C.tipo_candidatura AS Candidatura,CA.tipo_cargo AS Cargo,P.nombre_partido AS Partido, I.Representacion_coalision AS Coalicion FROM inscripcion_candidato I INNER JOIN departamentos D INNER JOIN candidatura C INNER JOIN cargos CA INNER JOIN partidos P ON D.codigo_departamento=I.codigo_departamento AND I.id_candidatura=C.id_candidatura AND I.id_cargos=CA.id_cargos AND I.id_partidos=P.id_partidos  WHERE I.id_cargos=2';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss," inscripcion_candidato","table table-bordered",1);
		break;
}
?>
 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>
