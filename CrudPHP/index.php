<?php
include('connection.php');
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
    <link rel="stylesheet" href="css/style.css">
    <title>Waplicaciones</title>
</head>
<body>
     <main class="users-form">
        <h1>Registro de Usuarios</h1>
            <form action="insert_user.php" method="POST"> 
                <label for="name">Nombre</label>
                <input type="text" placeholder="Yenner" id="name" name="name">
                <label for="lastname">Apellido</label>
                <input type="text" placeholder="Alayon" id="lastname" name="lastname">
                <label for="username">Username</label>
                <input type="text" placeholder="yalayon" id="username" name="username">
                <label for="password">Password</label>
                <input type="text" placeholder="12345" name="password">
                <label for="email">Email</label>
                <input type="text" placeholder="yenneralayon@gmail.com" name="email">
                <input type="submit" value="Agregar Usuario">
            </form>
     </main>
     <section class="users-table">
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
                        ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['lastname'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>
                                <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></td>
                            </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
     </section>
</body>
</html>