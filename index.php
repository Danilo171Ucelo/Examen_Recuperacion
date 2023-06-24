<!DOCTYPE html>
<html>
<head>
    <title>table</title>
    <link href="style.css" rel="stylesheet"/>
  
</head>
<body>
    <h3> TABLA PARA INGRESAR PRODUCTOS</h3>
    <?php 

   
   $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
   $conexion = new PDO("mysql:host=localhost;dbname=recuperacion0907_23_18008", "root", "", $pdo_option);

   

   if( isset ($_POST["accion"])){
    if ($_POST["accion"] == "Crear"){
        $insert = $conexion->prepare("INSERT INTO producto (codigo,nombre,precio,existencia)VALUES
        (:codigo, :nombre, :precio, :existencia)") ;
        $insert->bindValue('codigo', $_POST['codigo']);
        $insert->bindValue('nombre', $_POST['nombre']);
        $insert->bindValue('precio', $_POST['precio']);
        $insert->bindValue('existencia', $_POST['existencia']);
        $insert->execute();
       }
        
         }

    //Ejecutamos la consulta segundo paso a realizar
   $select = $conexion->query("SELECT codigo, nombre, precio, existencia FROM producto");
    ?>

 <?php if (isset($_POST["accion"]) && $_POST["accion"] == "Editar") { ?>

   
   
    <?php } ?>
    <a href="crear.php">crear nuevo</a>
 <table border "1">
    <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>EXISTENCIA</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($select->fetchAll() as $producto) { ?>
        <tr>
            <td> <?php echo $producto["codigo"] ?> </td>
            <td> <?php echo $producto["nombre"] ?> </td>
            <td> <?php echo $producto["precio"] ?> </td>
            <td> <?php echo $producto["existencia"] ?> </td>
            <td> <form method= "POST"> 
              <button type="submit">crear</button>
              <input type ="hidden" name="accion" value="crear">
              <input type ="hidden" name="codigo" value="<?php echo $anim["codigo"]?>"/>
              </form>
            </td>
        </tr>  
    <?php } ?>
    </tbody>
 </table>

</body>
</html>
