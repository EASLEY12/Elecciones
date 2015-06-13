

<html>
<head>

<script type="text/javascript">


function checkear_extension()	{
	alert("hola")
	// definimos antes los métodos prever() y limpiar()
	(/.(gif|jpg|png)$/i.test(fichero.value)) ? prever() : limpiar();
}
	

</script>

<style type="text/css" >

html	{
	margin: 0;
	height: 100%;
}
body	{
	height: 100%;
	
	background-repeat: no-repeat;
	background-position: center center;
}
</style>

</head>
<body  >
<form>
	<input type="file" name="hol" value="hi" onchange="checkear_extension()">
</form>

</body>
</html>


