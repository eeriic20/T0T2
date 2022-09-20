<?php

class sayingModel {
    function getSaying($n){
        $sayings =[
            "A quien madruga, Dios le ayuda",
            "No hay mal que por bien no venga",
            "De tal palo, tal astilla"
        ];
        return $sayings[$n];
    }
}
?>