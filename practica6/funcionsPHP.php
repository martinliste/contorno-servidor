<?php


function suma2 ($num1, $num2){
    $res = $num1 + $num2;
    return $res;
}
function suma3 ($num1, $num2, $num3){
    $res = $num1 + $num2 + $num3;
    return $res;
}

function suma4 ($num1, $num2, $num3, $num4){
    $res = $num1 + $num2 + $num3 + $num4;
    return $res;
}

function multiplica2($num1, $num2){
    $res = $num1 * $num2;
    return $res;
}
function multiplica3($num1, $num2, $num3){
    $res = $num1 * $num2 * $num3;
    return $res;
}
function multiplica4 ($num1, $num2, $num3, $num4){
    return $res = $num1*$num2*$num3*$num4;
}

function maior($num1, $num2, $num3, $num4){
    $array =[$num1, $num2, $num3, $num4];
    $max =0;
    foreach($array as $value){
        if($value > $max){
            $max = $value;
        }
    }
    return $max;
}
function menor($num1, $num2, $num3, $num4){
    $array = array($num1, $num2, $num3, $num4);
    $min = $num1;
    for($i = 0; $i<sizeof($array); $i++){
        if($array[$i] < $min){
            $min = $array[$i];
        }
    }
    return $min;
}

function media($num1,$num2,$num3,$num4){
    return ($num1+$num2+$num3+$num4)/4;
}

function factorial3($num){
    $res = 1;
    for($i =1 ;$i<=$num;$i++){
        $res *=$i; 
    }
    return $res;
}

function segundo_maior($num1, $num2, $num3, $num4){
    $array = array($num1, $num2, $num3, $num4);
    $max = 0;
    $max_sec = 0;
    foreach($array as $val){
        if($val >$max){
            $max_sec = $max;
            $max = $val;
        }
    }
    return $max_sec;
}

//===============================================================\\
$n1 = $_GET['n1']; 
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];

if($_GET['suma2']){
    echo suma2($n1,$n2);
}

if($_GET['suma3']){
    echo suma3($n1,$n2,$n3);
}

if($_GET['suma4']){
    echo suma4($n1,$n2,$n3,$n4);
}

if( $_GET['multi2']){
    echo multiplica2($n1,$n2);
}

if($_GET['multi3']){
    echo multiplica3($n1,$n2,$n3);
}

if($_GET['multi4']){
    echo multiplica4($n1,$n2,$n3,$n4);
}

if($_GET['maior']){
    echo "O número maior é o : ". maior($n1,$n2,$n3,$n4);
}

if($_GET['menor']){
    echo " O número menor é o: ". menor($n1,$n2,$n3,$n4);
}

if($_GET['media']){
    echo "A media dos catro números é: ". media($n1,$n2,$n3,$n4);
}

if($_GET['fact3']){
    echo "O factorail de ".$n3." é: ". factorial3($n3);
}

if($_GET['segundoMaior']){
    echo segundo_maior($n1,$n2,$n3,$n4);
}
?>

