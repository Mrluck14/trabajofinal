<?php

    require 'PersonalLib.php';

    $id = $_POST['id'];

    if ($id > 0){
      $sql = "SELECT * FROM trabajos_realizados WHERE trabajos_realizados.idrubro = " . $id;
    }else{
      $sql = "SELECT * FROM trabajos_realizados ";
    }


    $object = new CRUD();
    $datos = $object->Read($sql); 
    
    $number =0;

    if (count($datos) > 0) {
      
      foreach ($datos as $row) {
          
          $fecha = $row['fecha'];
          $array_meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
          $array_fecha = explode('-', $fecha);
          $mostrar_fecha = $array_fecha[2].' de '.$array_meses[intval($array_fecha[1])-1].' del '.$array_fecha[0];

      
    $contenedor .=  '<div class="col-md-6 col-lg-4 col-xl-3">
                       <div class="card mb-4 animated pulse">
                        <img class="card-img-top img-fluid" src="imagenes/'.$row['img_card'].'" >
                        <div class="card-block">
                        <h5 class="card-title text-center m-2">'.$row['titulo'].'</h5>
                        <p class="card-text text-justify m-2">'.substr($row['desc_corta'], 0,50).'...</p>
                        <p class="card-text m-2"><small class="text-muted">Creado el '.$mostrar_fecha.'</small></p>
                        <a href="#" class="btn btn-danger float-right m-2">Ver más</a>
                    </div>
                    </div>
                    </div>';

         
        
        
          $number++;
      }

    }else {   //No encontro datos
         $data = '';
    }

echo $contenedor;



?>
           




