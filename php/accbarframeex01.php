<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');


/*mysql_connect("localhost","root","");
mysql_select_db("ventas");
$sql="SELECT * FROM inventariov ";
$res =mysql_query($sql);
while ($row=mysql_fetch_array($res)) {
	$datos[]=$row['ventas'];
	$labels[]=$row['Producto'];
}*/

$datay1=array(13,10,19,7,17,6);
$datay2=array(4,5,2,7,5,25);

// Create the graph.
$graph = new Graph(450,350);
$graph->SetScale('textlin');
$graph->SetMarginColor('white');

// Setup title
$graph->title->Set('No puedo hacer  la grafica con base de datos');

// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('gold','skyblue',GRAD_VERT);
$bplot->SetColor('darkred');

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('skyblue','blue',GRAD_VERT);
$bplot2->SetColor('darkgreen');

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$graph->Add($accbplot);

$graph->Stroke();
?>
