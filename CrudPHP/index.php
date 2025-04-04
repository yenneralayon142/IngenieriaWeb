<?php
include('config/connection.php');
$con = connection();
$sql = "SELECT * from users";
$query = mysqli_query($con,$sql);
if (!$query) {
    die("Error en la consulta: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waplicaciones</title>
</head>
<body>
     <main>
        <h1>Registro de Usuarios</h1>
            <form action="">
                <label for="name">Nombre</label>
                <input type="text" placeholder="Yenner" >
                <label for="lastname">Apellido</label>
                <input type="text" placeholder="Alayon" >
                <label for="username">Username</label>
                <input type="text" placeholder="yalayon" >
                <label for="password">Password</label>
                <input type="text" placeholder="12345" >
                <label for="email">Email</label>
                <input type="text" placeholder="yenneralayon@gmail.com">
                <input type="submit" value="Agregar Usuario">
            </form>
     </main>
     <section>
        <h2>Usuarios Registrados</h2>
            <table>
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($query)): 
                            var_dump($row); // Esto imprimirá cada fila de la base de datos
                        ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['lastname'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><a href="">Editar</a></td>
                                <td><a href="">Eliminar</a></td>
                            </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
     </section>
</body>
</html>