<?php
    function line($a, $b){
        if(is_numeric($a) && is_numeric($b)){
            return[-$b / $a];      
        }
        return[];
    }
    function square($a, $b, $c){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
            if($a == 0) {
                return line($b, $c);
            }
            $d= $b*$b - 4*$a*$c;
            if($d >= 0) {
                return[( -$b + sqrt($d) ) / 2 / $a, (-$b - sqrt($d) / 2 / $a) ];
            }
        }
        return[];
    }
?>