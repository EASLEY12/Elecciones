<?php
extract($_GET);

$deto="08";
switch ($caso) {
    case 'depto1':
        if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='01'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
        break;
        case 'depto2':
    
        if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='02'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

        break;
        case 'depto3':
            if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='03'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
    //$arrayX["Litoral"][] = $v1;
      // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

            break;
            case 'depto4':
                if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='04'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                break;
                case 'depto5':
if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='05'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    
                    break;
                    case 'depto6':

                        if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='06'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                        break;
                        case 'depto7':
                            if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='07'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                            break;
                            case 'depto8':
                                if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='08'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                break;
                                case 'depto9':
                                    if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='09'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                    break;
                                    case 'depto10':
                                    if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='10'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                        break;
                                        case 'depto11':
                                            if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='11'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                            break;
                                            case 'depto12':
                                                if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='12'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                                break;
                                                case 'depto13':
                                                    if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='13'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                                    break;
                                                    case 'depto14':
                                                        if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT  R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='14'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                                        break;
                                                        case 'depto15':
                                                        if (!($cn = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("sistema_de_elecciones", $cn)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        mysql_query("SET NAMES 'utf8'");
 


        $sql = "SELECT R.id_municipios, R.id_votosAlcalde,R.id_departamento,R.id_partidos,R.numeros_votos as ct,P.nombre_Partido
FROM resultados_elecciones R INNER JOIN partidos P ON R.id_partidos=P.id_partidos WHERE id_departamento='08' and id_municipios='0819'
ORDER BY numeros_votos  DESC";
        $res = mysql_query($sql,$cn);
        $arrayX = array();
        while ($dep_rows = mysql_fetch_array($res)) {
       

            $arrayX[$dep_rows["nombre_Partido"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["id_partidos"]][] = (int) ($dep_rows["ct"]);
            //$arrayX[$dep_rows["nombre"]][] = (int) ($dep_rows["cf"]);
        }
        // solo para ver cambios en la grafica
        //$v1 = (int)(rand(1,2));
        //$v2 = (int)(rand(1,2));
        //$arrayX["Litoral"][] = $v1 + $v2;
        //$arrayX["Litoral"][] = $v1;
       // $arrayX["Litoral"][] = $v2;
        // solo para ver cambios en la grafica
 
        echo json_encode($arrayX);
    

                                                        break;
    // case n // otras opciones
    // case n // otras opciones
}

?>