
<?php




require 'BD-Mysql/Conexion.php ';

/* Un arreglo de las columnas a mostrar en la tabla */
$columns =[ 'nombre','artista' ,'año',' episodio ','adicionales'];
$table="bandas";



$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;


/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


/* Consulta */
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;


/* Mostrado resultados */
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['nombre'] . '</td>';
        $html .= '<td>' . $row['artista'] . '</td>';
        $html .= '<td>' . $row['año'] . '</td>';
        $html .= '<td>' . $row['episodio'] . '</td>';
        $html .= '<td>' . $row['adicionales'] . '</td>';  
       ; 
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>