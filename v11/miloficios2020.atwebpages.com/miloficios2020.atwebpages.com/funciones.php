<?php
/*    
function listarProductos(){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from producto");
		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
		$arreglo = array();
		foreach($filas as $fila) {			
		    $elemento = array();
			$elemento['idProducto'] = $fila['id_producto'];
			$elemento['nombre'] = $fila['nombre'];
			$elemento['descripcion'] = $fila['descripcion'];
			$elemento['precio'] = $fila['precio'];
			$elemento['stock'] = $fila['stock'];
			$elemento['importancia'] = $fila['importancia'];
			$elemento['imagen'] = $fila['imagen'];
			$elemento['id_categoria'] = $fila['id_categoria'];
			$arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

function buscarProductosPorNombre($nombre){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from producto where nombre like ?");
		$stmt->bindValue(1, "%$nombre%", PDO::PARAM_STR);

		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);		
		$arreglo = array();
		foreach($filas as $fila) {			
			$elemento = array();
			$elemento['idProducto'] = $fila['id_producto'];
			$elemento['nombre'] = $fila['nombre'];
			$elemento['descripcion'] = $fila['descripcion'];
			$elemento['precio'] = $fila['precio'];
			$elemento['stock'] = $fila['stock'];
			$elemento['importancia'] = $fila['importancia'];
			$elemento['imagen'] = $fila['imagen'];
			$elemento['id_categoria'] = $fila['id_categoria'];
			$arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

function insertarProducto($nombre, $descripcion, $precio, $stock, $importancia, $imagen, $idCategoria){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into producto (nombre, descripcion, precio, stock, importancia, imagen, id_categoria) values (?,?,?,?,?,?,?)");
		$datos = array($nombre, $descripcion, $precio,
					   $stock, $importancia, $imagen,
					   $idCategoria);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

function insertarUsuarioTec($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into usuario_tec (nom_usuario_tec, ape_usuario_tec, id_genero, correo_usuario_tec, contrasena_usuario_tec, dni_usuario_tec, id_distrito, direccion_usuario_tec, tel_usuario_tec, rkg_usuario_tec, nom_rol, imagen_usuario_tec) values (?,?,?,?,?,?,?,?,?,?,?,?)");
		$datos = array($nom_usuario_tec, $ape_usuario_tec, $id_genero,
					   $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito,
					   $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}



function insertarUsuarioTec($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into usuario_tec (nom_usuario_tec, ape_usuario_tec, id_genero, correo_usuario_tec, contrasena_usuario_tec, dni_usuario_tec, id_distrito, direccion_usuario_tec, tel_usuario_tec, rkg_usuario_tec, nom_rol, imagen_usuario_tec) values (?,?,?,?,?,?,?,?,?,?,?,?)");
		$datos = array($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

*/


//////////////////////////////////////REGISTRAR///////////////////////////


function insertarUsuarioTec($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into usuario_tec (nom_usuario_tec, ape_usuario_tec, id_genero, correo_usuario_tec, contrasena_usuario_tec, dni_usuario_tec, id_distrito, direccion_usuario_tec, tel_usuario_tec, rkg_usuario_tec, nom_rol, imagen_usuario_tec) values (?,?,?,?,?,?,?,?,?,?, ?,?)");
		$datos = array($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}



function insertarUsuario($nom_usuario, $ape_usuario, $id_genero, $correo_usuario, $contrasena_usuario, $dni_usuario, $id_distrito, $direccion_usuario, $tel_usuario, $nom_rol, $imagen_usuario){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into usuario (nom_usuario, ape_usuario, id_genero, correo_usuario, contrasena_usuario, dni_usuario, id_distrito, direccion_usuario, tel_usuario,  nom_rol, imagen_usuario) values (?,?,?,?,?,?,?,?,?,?,?)");
		$datos = array($nom_usuario, $ape_usuario, $id_genero, $correo_usuario, $contrasena_usuario, $dni_usuario, $id_distrito, $direccion_usuario, $tel_usuario, $nom_rol, $imagen_usuario);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////lISTAR///////////////////////////


function listarTecnicos(){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from usuario_tec");
		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
		$arreglo = array();
		foreach($filas as $fila) {			
		    $elemento = array();
			$elemento['nom_usuario_tec'] = $fila['nom_usuario_tec'];
            $elemento['ape_usuario_tec'] = $fila['ape_usuario_tec'];
			$elemento['id_genero'] = $fila['id_genero'];
            $elemento['correo_usuario_tec'] = $fila['correo_usuario_tec'];
            $elemento['contrasena_usuario_tec'] = $fila['contrasena_usuario_tec'];
			$elemento['dni_usuario_tec'] = $fila['dni_usuario_tec'];
            $elemento['id_distrito'] = $fila['id_distrito'];
			$elemento['direccion_usuario_tec'] = $fila['direccion_usuario_tec'];
            $elemento['tel_usuario_tec'] = $fila['tel_usuario_tec'];
            $elemento['rkg_usuario_tec'] = $fila['rkg_usuario_tec'];
			$elemento['nom_rol'] = $fila['nom_rol'];
            $elemento['imagen_usuario_tec'] = $fila['imagen_usuario_tec'];                        
			$arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

function listarUsuarios(){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from usuario");
		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
		$arreglo = array();
		foreach($filas as $fila) {			
		    $elemento = array();
			$elemento['nom_usuario'] = $fila['nom_usuario'];
            $elemento['ape_usuario'] = $fila['ape_usuario'];
			$elemento['id_genero'] = $fila['id_genero'];
            $elemento['correo_usuario'] = $fila['correo_usuario'];
            $elemento['contrasena_usuario'] = $fila['contrasena_usuario'];
			$elemento['dni_usuario'] = $fila['dni_usuario'];
            $elemento['id_distrito'] = $fila['id_distrito'];
			$elemento['direccion_usuario'] = $fila['direccion_usuario'];
            $elemento['tel_usuario'] = $fila['tel_usuario'];
            $elemento['nom_rol'] = $fila['nom_rol'];
            $elemento['imagen_usuario'] = $fila['imagen_usuario'];                        
			$arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

///////////////////////////////////////////////////////////////////////////


function buscarDatos ($dni_usuario_tec,$contrasena_usuario_tec){
		try{
			$db = Conexion::getConexion();
			$stmt = $db->prepare("SELECT nom_usuario_tec, ape_usuario_tec FROM usuario_tec WHERE dni_usuario_tec=? AND contrasena_usuario_tec=?");
			$datos = array($dni_usuario_tec,$contrasena_usuario_tec);
			$stmt->execute($datos);
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$arreglo = array();
			foreach ($filas as $f){
				$item = array();
				$item['nom_usuario_tec'] = $f['nom_usuario_tec'];
				$item['ape_usuario_tec'] = $f['ape_usuario_tec'];
				$arreglo[] = $item;
			}
			return $arreglo;


		}catch(PDOException $e){
			$db->rollback();
			$mensaje = "Consulta invalida: ".$e->getMessage();

		}



}













//////////////////////////////////////ACTUALIZAR///////////////////////////


function actualizarTecnico($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec, $id__usuario_tec){
	try { 
		$db = Conexion::getConexion();		
		$stmt = $db->prepare("update producto set nom_usuario_tec=?, ape_usuario_tec=?, id_genero=?, correo_usuario_tec=?, contrasena_usuario_tec=?, dni_usuario_tec=?, id_distrito=?, direccion_usuario_tec=?, tel_usuario_tec=?, rkg_usuario_tec=?, nom_rol=?, imagen_usuario_tec=? where id__usuario_tec=?");
		$datos = array($nom_usuario_tec, $ape_usuario_tec, $id_genero, $correo_usuario_tec, $contrasena_usuario_tec, $dni_usuario_tec, $id_distrito, $direccion_usuario_tec, $tel_usuario_tec, $rkg_usuario_tec, $nom_rol, $imagen_usuario_tec, $id__usuario_tec);
		$db->beginTransaction();						
		$stmt->execute($datos);			
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}	
}

function actualizarUsuario($nom_usuario, $ape_usuario, $id_genero, $correo_usuario, $contrasena_usuario, $dni_usuario, $id_distrito, $direccion_usuario, $tel_usuario, $nom_rol, $imagen_usuario, $id__usuario){
	try { 
		$db = Conexion::getConexion();		
		$stmt = $db->prepare("update producto set nom_usuario=?, ape_usuario=?, id_genero=?, correo_usuario=?, contrasena_usuario=?, dni_usuario=?, id_distrito=?, direccion_usuario=?, tel_usuario=?, nom_rol=?, imagen_usuario=? where id__usuario=?");
		$datos = array($nom_usuario, $ape_usuario, $id_genero, $correo_usuario, $contrasena_usuario, $dni_usuario, $id_distrito, $direccion_usuario, $tel_usuario, $nom_rol, $imagen_usuario, $id__usuario);
		$db->beginTransaction();						
		$stmt->execute($datos);			
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}	
}






/*

function actualizarProducto($nombre, $descripcion, $precio, $stock, $importancia, $imagen, $idCategoria, $idProducto){
	try { 
		$db = Conexion::getConexion();		
		$stmt = $db->prepare("update producto set nombre=?, descripcion=?, precio=?, stock=?, importancia=?, imagen=?, id_categoria=? where id_producto=?");
		$datos = array($nombre, $descripcion, $precio, $stock, $importancia, $imagen, $idCategoria, $idProducto);
		$db->beginTransaction();						
		$stmt->execute($datos);			
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}	
}

function eliminarProducto($id){
	try { 
		$db = Conexion::getConexion();  
		$stmt = $db->prepare("delete from producto where id_producto=?");
		$datos = array($id);
		$db->beginTransaction();			
		$stmt->execute($datos);			
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}	
}


function listarAvisos(){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from aviso");
		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
		$arreglo = array();
		foreach($filas as $fila) {			
		    $elemento = array();
			$elemento['id_aviso'] = $fila['id_aviso'];
			$elemento['titulo'] = $fila['titulo'];
			$elemento['fecha_inicio'] = $fila['fecha_inicio'];
			$elemento['fecha_fin'] = $fila['fecha_fin'];
			$elemento['estado'] = $fila['estado'];
			$elemento['id_usuario'] = $fila['id_usuario'];
			
			$arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}

function buscarAvisos($fecha){	
	try { 	
		$db = Conexion::getConexion();
		$stmt = $db->prepare("select * from aviso where ? between fecha_inicio and fecha_fin");
		$stmt->bindValue(1, $fecha, PDO::PARAM_STR);

		$stmt->execute();
		$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);		
		$arreglo = array();
		foreach($filas as $fila) {			
			$elemento = array();
			$elemento['titulo'] = $fila['titulo'];
			$elemento['fecha_inicio'] = $fila['fecha_inicio'];
			$elemento['fecha_fin'] = $fila['fecha_fin'];
			$elemento['estado'] = $fila['estado'];
                        $arreglo[] = $elemento;
		}
		return $arreglo;
		
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}


function insertarAviso($titulo, $fecha_inicio, $fecha_fin){
	try { 
		$db = Conexion::getConexion();			
		$stmt = $db->prepare("insert into aviso (titulo,fecha_inicio,fecha_fin,estado) values (?,?,?,'1')");
		$datos = array($titulo, $fecha_inicio, $fecha_fin);
		$db->beginTransaction();
		$stmt->execute($datos);
		$db->commit();
	} catch (PDOException $e) {
		$db->rollback();
		$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
		die($mensaje);
	}		
}
*/
?>