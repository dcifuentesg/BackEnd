<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    
    if ($edad >= 18) {
        echo "Es mayor de edad";
    } elseif($edad<0) {
        echo "Edad incorrecta";
    }else{
        echo "Es menor de edad";
    }
}
?>
