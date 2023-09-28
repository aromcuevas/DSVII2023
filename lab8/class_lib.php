<?php

class Ventas {
    var $val;
    var $res;
    function __construct($v){
       $this->val = $v;
    }
    function calcular(){
       if ($this->val >= 80 )
       {
           $res = "Las ventas superan el 80% <br/> <img src='green.png'>";
       }
       else if ($this->val >= 50 )
       {
           $res = "Las ventas estan entre 50% y 79% <br/> <img src='yellow.png'>";
       }
       else
       {
           $res = "Las ventas no superan el 50% <br/> <img src='red.png'>";
       }  
       return $res;
    }
}

class Numeros { 
  var $n;
  var $i;
  var $nx;
  function __construct($n){
    $this->n = $n;
  }
  function operar(){
   $i=1;
   $nx=1;
   while ($i <= $this->n)
   {	
     $nx = $i * $nx;
     $i++;
   }
   return $nx;
 }
}

class Numeros2 {    
    var $elementos = array();
    var $valor;
    var $i;
    var $x;
    function __construct($ele){
      $this->elementos = $ele;
      $this->valor = 0;
      $this->i = 0;
    }
    function buscar_elemento(){
        foreach($this->elementos as $elemento){
            if ($elemento >= $this->valor)
            {
                $this->valor = $elemento;
                $this->x = $this->i;
            }
            $this->i++;
        }
        return $this->elementos[$this->x];
    }    
    function buscar_indice(){
        return $this->x;
    }
  }

?>