<?php
  class retornoDatos{
    //tipo string 
    //tipo entero
    //tipo arreglo
    //tipo json

    public function retornoString($edad){
      if ($edad>18) {
        return "eres mayor de edad";
      } else {
        return "eres menor de edad";
      }
    }
    public function retornoEntero($valor){
      if ($valor>0) {
        return 1;
      } else {
        return 0;
      }
    }
    public function retornoArreglo($ciclos){
      $datos=array();
      for ($i=0; $i < $ciclos ; $i++) { 
        $datos[$i]=$i;
      }
      return $datos;
    }
    public function retornaJson(){
      $arr=array(
        "hdd"=> 500,
        "pantalla"=>21,
        "ram"=> 8
      );
      return json_encode($arr);
    }
  }
  $cadena=new retornoDatos();
  var_dump($cadena->retornoString(20));
  echo "<br>";
  var_dump($cadena->retornoEntero(-3));
  echo "<br>";
  var_dump($cadena->retornoArreglo(6));
  echo "<br>";
  var_dump($cadena->retornaJson());
?>