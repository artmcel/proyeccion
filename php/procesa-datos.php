<?php
/*
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
*/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Cookie");


$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

//echo $contentType;

/* Send error to Fetch API, if unexpected content type 


if ($contentType !== "application/json"){
    
  die(json_encode([
      'value' => 0,
    'error' => 'Content-Type is not set as "application/json"',
    'data' => null,
]));

}
*
/*
*/
$recibeJson = json_decode(file_get_contents("php://input"), false);

if (is_array($recibeJson)) {
    
    die(json_encode([
        'value' => 0,
        'error' => 'Received JSON is improperly formatted',
        'data' => null
    ]));
}

echo json_encode($recibeJson);

//$datos  = (array)$recibeJson;
//print_r($datos[0]->nombre);

/**
 * respuesta al fetch js
 */
//echo json_encode($recibeJson);

/*
$Fcelular = $datos['celular'];
$Fcasa = $datos['telCasa'];
$Fmail = $datos['email'];
$Fnivel = $datos['nivel'];
$Fcarrera = $datos['carrera'];
$Fhorario = $datos['horario'];
$Fperiodo = $datos['periodo'];
$Fplantel = $datos['plantel'];
$FescuelaOr = $datos['escuela'];
$Fnombre2 = $datos['nombre2'];
$Ftelefono2 = $datos['telefono2'];


$args = array(
  'nombre' => $Fnombre,
  'celular' => $Fcelular,
  'tel_casa' => $Fcasa,
  'email' => $Fmail,
  'nivel' => $Fnivel,
  'carrera' => $Fcarrera,
  'horario' => $Fhorario,
  'periodo' => $Fperiodo,
  'plantel' => $Fplantel,
  'escuela' => $FescuelaOr,
  'nombre_informe' => $Fnombre2,
  'telefono_informes' => $Ftelefono2

);


require('./ws.php');
$ws = new WS();
$r= $ws->agregarProspectacion($args);
$result = get_object_vars($r);

if ($result["OperacionExito"] == True) {
  //header("location: ../registro");
  echo json_encode([
    'registro' => true
  ]);
}else{
  echo json_encode([
    'registro' => false
  ]);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(!isset($_POST["nombre"]) || empty($_POST["nombre"])){
        header("location: ../");
    }else{

        $Fnombre=$_POST["nombre"];
        $Fcelular = $_POST["celular"];
        $Fcasa = $_POST["telefono_casa"];
        $Fmail = $_POST["email"];
        $Fnivel = $_POST["nivel"];
        $Fcarrera = $_POST["carrera"];
        $Fhorario = $_POST["horario"];
        $Fperiodo = $_POST["periodo"];
        $Fplantel = $_POST["plantel"];
        $FescuelaOr = $_POST["escuela"];
        $Fnombre2 = $_POST["nombre2"];
        $Ftelefono2 = $_POST["telefono2"];

        $args = array(
            'nombre' => $Fnombre,
            'celular' => $Fcelular,
            'tel_casa' => $Fcasa,
            'email' => $Fmail,
            'nivel' => $Fnivel,
            'carrera' => $Fcarrera,
            'horario' => $Fhorario,
            'periodo' => $Fperiodo,
            'plantel' => $Fplantel,
            'escuela' => $FescuelaOr,
            'nombre_informe' => $Fnombre2,
            'telefono_informes' => $Ftelefono2

        );

        //print_r($args);
        
        require('ws.php');
        $ws = new WS();
        $r= $ws->agregarProspectacion($args);
        $result = get_object_vars($r);

        if ($result["OperacionExito"] == True) {
            //header("location: ../registro");
			json_encode([
				'registro' => true
			]);
        }
    }
}else{
    header("location: ../");
}
*/

?>