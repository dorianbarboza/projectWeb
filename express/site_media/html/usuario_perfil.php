<table>
    <tr>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Correo electronico</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
    </tr>
    <?php
    $url='http://localhost/projectWeb/api.mvc/Cliente/getCliente/';
    $data=file_get_contents($url);
    $prueba = json_decode($data);
    ?>

    <?php foreach($prueba->datos as $dato) : ?>
    <tr>
        <td><?php echo ($dato->ID_Cliente);?></td>
        <td><?php echo ($dato->Username);?></td>
        <td><?php echo ($dato->Password);?></td>
        <td><?php echo ($dato->Correo);?></td>
        <td><?php echo ($dato->Telefono);?></td>
        <td><?php echo ($dato->Nombre);?></td>
        <td><?php echo ($dato->Apellidos);?></td>
        <td><?php echo ($dato->FechaNacimiento);?></td>
        <td><?php echo ($dato->Ciudad);?></td>
        <td><?php echo ($dato->Sexo);?></td>

    </tr>
    <?php endforeach;?>
</table>
