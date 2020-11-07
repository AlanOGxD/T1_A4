<!DOCTYPE html>
<body>

<?php
    $alumnos_array = array(
        "Antonio García" => array(86, 86, 77, 90, 80, 100),
        "María Martínez" => array(70, 80, 80, 90, 81, 91),
        "José López" => array(73, 65, 81, 68, 90,82),
        "Josefa Sánchez" => array(78, 60, 89, 86, 88, 65),
        "Francisco González" => array(59, 80, 90, 90, 100, 91),
        "Carmen Hernández" => array(78, 63, 89, 80, 88, 55),
        "Juan Rosdríguez" => array(70, 80, 93, 75, 88, 81),
        "Dolores Torres" => array(89, 68, 89, 98, 88, 86),
        "Manuel Flores" => array(72, 63, 86, 100, 82, 98),
        "Ana Ruiz" => array(70, 91, 99, 89, 100, 55)
    );    



    $prom_general=0;
    $prom_materia=0;
    $prom_alumno=0;
    $mejor_prom=0;
    $alumnos_mayorAprom=0;
        
    function prom_alumnos($alumnos_array){
        $c=0;
    foreach ($alumnos_array as $nombre => $calif) {
        $prom_alumno=0;

        for ($i=0; $i < 6; $i++) { 
            //echo $calif[$i]."<br>";
            $prom_alumno+=$calif[$i];
        }
        $prom_alumno=$prom_alumno/6;
        $prom_alu_final[$c]=$prom_alumno;
        $c++;
    }
    
    return $prom_alu_final;
    }

    function prom_alumnos2($alumnos_array){
        $c=0;
    foreach ($alumnos_array as $nombre => $calif) {
        echo $nombre."<br>";
        $prom_alumno=0;

        for ($i=0; $i < 6; $i++) { 
            //echo $calif[$i]."<br>";
            $prom_alumno+=$calif[$i];
        }
        $prom_alumno=$prom_alumno/6;
        $prom_alu_final[$c]=$prom_alumno;
        echo $prom_alumno."<br>";
        $c++;
    }
    
    return $prom_alu_final;
    }



   /* function prom_alumnos($alumno){
        $c=0;
        foreach($alumno as $nombre => $calif){
            $prom_alumno=0;
            for ($i=0; $i < 6; $i++) { 
                $prom_alumno+=$calif[$i];
            }
            $prom_alumno=$prom_alumno/6;
            $prom_alumno_array[$c]=$prom_alumno;
            $c++;
            }
        return $prom_alumno_array;
    }

    function prom_alumnos2($alumno){
        $c=0;
        foreach($alumno as $nombre => $calif){
            echo $nombre."<br>";
            $prom_alumno=0;
            for ($i=0; $i < 6; $i++) { 
                $prom_alumno+=$calif[$i];
            }
            $prom_alumno=$prom_alumno/6;
            $prom_alumno_array[$c]=$prom_alumno;
            echo $prom_alumno."<br>";
            $c++;
            }
        return $prom_alumno_array;
    }*/

    function prom_gen($alumnos){
        $c=0;
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            $prom+=$calif;
            //echo "<br>".$calif;
        }
        $prom=$prom/sizeof($alumnos);
        echo "final: ".$prom;

        return $prom;
    }

    function prom_gen2($alumnos){
        $c=0;
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            $prom+=$calif;
            //echo "<br>".$calif;
        }
        $prom=$prom/sizeof($alumnos);

        return $prom;
    }

    function prom_materia($alumnos_array){
        $m1=0; $m2=0;$m3=0; $m4=0; $m5=0; $m6=0;
        foreach($alumnos_array as $nombre => $calif){
            for ($i=0; $i < 6; $i++) { 
                //echo "i".$i."<br>";
                if($i==0){
                    $m1+=$calif[$i];
                   // echo "0<br>";
                }
                else if($i==1){
                    $m2+=$calif[$i];
                   // echo "1<br>";
                }
                else if($i==2){
                   // echo "2<br>";
                    $m3+=$calif[$i];}
                else if($i==3){
                   // echo "3<br>";
                    $m4+=$calif[$i];}
                else if($i==4){
                   // echo "4<br>";
                    $m5+=$calif[$i];}
                else if($i==5){
                    //echo "5<br>";
                    $m6+=$calif[$i];}
                    
            }
            
        }
        $m1=$m1/sizeof($alumnos_array);
        $m2=$m2/sizeof($alumnos_array);
        $m3=$m3/sizeof($alumnos_array);
        $m4=$m4/sizeof($alumnos_array);
        $m5=$m5/sizeof($alumnos_array);
        $m6=$m6/sizeof($alumnos_array);
            
        echo "Materia 1: ".$m1."<br>";
        echo "Materia 2: ".$m2."<br>";
        echo "Materia 3: ".$m3."<br>";
        echo "Materia 4: ".$m4."<br>";
        echo "Materia 5: ".$m5."<br>";
        echo "Materia 6: ".$m6."<br>";    
    }

    function prom_mejor($alumnos, $alumnos2){

        $n="";
        $prom=0;
        foreach ($alumnos as $nombre => $calif) {
            if ($prom<=$calif) {
                $prom=$calif;
                $n=$nombre;
            }
        }

        foreach ($alumnos2 as $nombre => $calif) {
            if ($n==$nombre) {
                $n=$nombre;
            }
        }
        echo $n.": ".$prom;
    }


    function prom_may_gen($alumnos, $promgen){

        $n="";
        $prom=$promgen;
        $c=0;
        foreach ($alumnos as $nombre => $calif) {
            if ($prom<=$calif) {
                
            $c++;
            }
            
        }
        
        echo "Total ".$c;
    }

    echo "Promedios por alumno<br>";
    prom_alumnos2($alumnos_array);

    echo "<br><br>";
    echo "Promedio General: <br>";
    prom_gen(prom_alumnos($alumnos_array));
    
    echo "<br><br>";
    echo "Promedio por materia<br>";
    prom_materia($alumnos_array);

    echo "<br><br>promedio mayor: <br>";
    prom_mejor(prom_alumnos($alumnos_array), $alumnos_array);


    echo "<br><br>promedio mayor al general: <br>";
    prom_may_gen(prom_alumnos($alumnos_array), prom_gen2(prom_alumnos($alumnos_array)) );
?>
</body>
</html>