<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="highcharts.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
         <script type="text/javascript" src="highcharts-3d.js"></script>
         <script type="text/javascript">

         </script>
        
        <style type="text/css">
input {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
        </style>
        <link rel="stylesheet" type="text/css" href="prototipo1.css">
    </head>
    <body>
    <div ID ="base">

<section>

<ul Class="juan">
        <li><a href="/Elecciones/index.php"> Inicio de sesion</a></li>
        </ul>
    <br>

</section>
</div>
<table border="1px"><tr> <td>
<input type="button" id="btn_genera" onclick="javascript: recarga1()" value="Depto de  Ahuachapan" />
  <input type="button" id="btn_genera" onclick="javascript: recarga2()" value="Depto de  Santa Ana" />
  <td>
   <input type="button" id="btn_genera" onclick="javascript: recarga3()" value="Depto de  Sonsonate" />
    <input type="button" id="btn_genera" onclick="javascript: recarga4()" value="Depto de  Chalatenango" />
    </td>
    </td>
     <td>
     <input type="button" id="btn_genera" onclick="javascript: recarga5()" value="Depto de  La Libertad" />
      <input type="button" id="btn_genera" onclick="javascript: recarga6()" value="Depto de San Sanvador" />
      </td>
      <td>
       <input type="button" id="btn_genera" onclick="javascript: recarga7()" value="Depto de Cuscatlan" />
        <input type="button" id="btn_genera" onclick="javascript: recarga8()" value="Depto de la Paz" />
        </td>
          <td>
          <input type="button" id="btn_genera" onclick="javascript: recarga9()" value="Depto Cabañas" />
         <input type="button" id="btn_genera" onclick="javascript: recarga10()" value="Depto  San Vicente" />
         </td>
           <td><input type="button" id="btn_genera" onclick="javascript: recarga11()" value="Depto de  Usulutan" />
             <input type="button" id="btn_genera" onclick="javascript: recarga12()" value="Depto de  San Miguel" />
             </td>
               <td><input type="button" id="btn_genera" onclick="javascript: recarga13()" value="Depto de Morazan " />
                 <input type="button" id="btn_genera" onclick="javascript: recarga14()" value="Depto de La Union" /></td>
                  <input type="button" id="btn_genera" onclick="javascript: recarga15()" value="municipio santiago" /></td>
        
        
        </td>
         </tr>
         </table>
         

        <br/>
        <div id="container_highchart"></div>

    </body>
</html>