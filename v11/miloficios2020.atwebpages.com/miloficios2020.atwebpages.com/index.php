<?php
require_once './lib/Slim/Slim.php';
require_once 'funciones.php';
require_once 'Conexion.php';

// Autocarga de la librería
\Slim\Slim::registerAutoloader();

// Creando una instancia del Slim
$app = new \Slim\Slim();
$app->response->header('Content-Type', 'application/json');
/*

// Servicio 1
$app->get('/productos', function(){  
    $lista = listarProductos();    
    echo json_encode($lista);    
});

// Servicio 2
$app->get('/productos/:nombre', function($nombre){   
    $lista = buscarProductosPorNombre($nombre);    
    echo json_encode($lista);    
});



// Servicio 3
$app->post('/productos', function () use ($app) {    
   $nombre = $app->request()->post('nombre');
   $precio = $app->request()->post('precio');   
   insertarProducto($nombre, '', $precio, 0, 0, '', 1);   
   echo json_encode(array('mensaje' => "Producto registrado satisfactoriamente"));    
});


*/


/////////////////GET////////////////////////////



// Servicio 1
$app->get('/tecnico', function(){  
    $lista = listarTecnicos();    
    echo json_encode($lista);    
});

// Servicio 2
$app->get('/usuario', function(){  
    $lista = listarUsuarios();    
    echo json_encode($lista);    
});


/////////////////POST////////////////////////////


// Servicio 3
$app->post('/tecnico', function () use ($app) {    
   
   $nom_usuario_tec = $app->request()->post('nom_usuario_tec');
   $ape_usuario_tec = $app->request()->post('ape_usuario_tec');
   $id_genero = $app->request()->post('id_genero');
   $correo_usuario_tec = $app->request()->post('correo_usuario_tec');
   $contrasena_usuario_tec = $app->request()->post('contrasena_usuario_tec');
   $dni_usuario_tec = $app->request()->post('dni_usuario_tec');
   $id_distrito = $app->request()->post('id_distrito');
   $direccion_usuario_tec = $app->request()->post('direccion_usuario_tec');
   $tel_usuario_tec = $app->request()->post('tel_usuario_tec');
   $rkg_usuario_tec = $app->request()->post('rkg_usuario_tec');
   $nom_rol = $app->request()->post('nom_rol');
   $imagen_usuario_tec = $app->request()->post('imagen_usuario_tec');
   
   insertarUsuarioTec($nom_usuario_tec, $ape_usuario_tec, 1, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, 1, $direccion_usuario_tec, $tel_usuario_tec, 1.0,'Especialista', ''); 
   
   echo json_encode(array('mensaje' => "Usuario registrado satisfactoriamente"));    
});

// Servicio 4
$app->post('/usuario', function () use ($app) {    
   
   $nom_usuario = $app->request()->post('nom_usuario');
   $ape_usuario = $app->request()->post('ape_usuario');
   $id_genero = $app->request()->post('id_genero');
   $correo_usuario = $app->request()->post('correo_usuario');
   $contrasena_usuario = $app->request()->post('contrasena_usuario');
   $dni_usuario = $app->request()->post('dni_usuario');
   $id_distrito = $app->request()->post('id_distrito');
   $direccion_usuario = $app->request()->post('direccion_usuario');
   $tel_usuario = $app->request()->post('tel_usuario');
   $nom_rol = $app->request()->post('nom_rol');
   $imagen_usuario = $app->request()->post('imagen_usuario');
   
   insertarUsuario($nom_usuario, $ape_usuario, 1, $correo_usuario, $contrasena_usuario, $dni_usuario, 1, $direccion_usuario, $tel_usuario, 'Usuario', ''); 
   
   echo json_encode(array('mensaje' => "Usuario registrado satisfactoriamente"));    
});

/////////////////////////////////////////////////////////////////////////////////

$app->post('/login', function () use ($app){

	$dni_usuario_tec = $app->request()->post('dni_usuario_tec');
	$contrasena_usuario_tec = $app->request()->post('contrasena_usuario_tec');
	$datos = buscarDatos($dni_usuario_tec,$contrasena_usuario_tec);
	echo json_encode($datos);

});








/*

// Servicio 4
$app->get('/avisos', function(){  
    $lista = listarAvisos();    
    echo json_encode($lista);    
});


// Servicio 5
$app->get('/avisos/:fecha', function($fecha){  
    $lista = buscarAvisos($fecha);    
    echo json_encode($lista);    
});
*/
/*
// Servicio 6
$app->post('/avisos', function() use ($app){     
   /*
   $request = $app->request();
   $body = $request->getBody();
   $data = json_decode($body);       
   insertarAviso($data->titulo, $data->fecha_inicio, $data->fecha_fin);
 //aqui va asterisco backslash  
   $titulo = $app->request()->post('titulo');
   $fecha_inicio = $app->request()->post('fecha_inicio');
   $fecha_fin = $app->request()->post('fecha_fin');
   insertarAviso($titulo, $fecha_inicio, $fecha_fin);
   echo json_encode(array('mensaje' => "Aviso registrado!"));    
});
*/

$app->run();