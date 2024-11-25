<html>
<head>
    <title>consultas</title>
    <meta charset="UTF-8" />
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th {
            border: 3px solid gray;
            background-color: blue;
            color: white;
            text-shadow: 1px 1px 2px black;
            padding: 10px;
            text-align: center;
        }

        td {
            border: 2px solid gray;
            padding: 8px;
            text-align: center;
            background-color: #f2f2f2;
        }

        tr:nth-child(even) td {
            background-color: #e6f7ff;
        }

        tr:nth-child(odd) td {
            background-color: #ffffff;
        }

        tr:hover td {
            background-color: #d1e7dd;
        }
    </style>
</head>
<body>
<?php
    include 'conexion2.php'; 
    $consulta = $conexion2 -> query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania") or die ("Ha fallado la conexión");
        while ( $registro = $consulta -> fetch_assoc() ) {
            echo '<table>'.
            "<th>nombre</th>
             <th>Edad</th>
             <th>Fecha</th>
             <th>VIP</th>
             <th>Provincia</th>".

            "<tr>".
            "<td>".$registro['nombre']."</td>".
            "<td>".$registro['Edad']."</td>".
            "<td>".$registro['Fecha']."</td>".
            "<td>".$registro['VIP']."</td>".
            "<td>".$registro['Provincia']."</td>".
            "</tr>".
            "</table>";
        }
        $conexion2=null;
?>
<br>
</body>
</html>
