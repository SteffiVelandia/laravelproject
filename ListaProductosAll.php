<?php
include('functions.php');
//$tipo = $_GET['txtTi'];
$array = array();	
if($resultset=getSQLResultSet("SELECT * FROM products")){
	
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		$e = array();
                $e['nombreP'] = $row[0];
                $e['descripcionP'] = $row[1];
                $e['fotoP'] = $row[2];
                $e['precioP'] = $row[3];
                $e['id'] = $row[4];
                array_push($array,$e);
	}
        echo json_encode($array);
}

?>