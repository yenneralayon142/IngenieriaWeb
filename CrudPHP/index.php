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
                <input type="text" placeholder="Yenner" id="name">
                <label for="lastname">Apellido</label>
                <input type="text" placeholder="Alayon" id="lastname">
                <label for="username">Username</label>
                <input type="text" placeholder="yalayon" id="username">
                <label for="password">Password</label>
                <input type="text" placeholder="12345" id="password">
                <label for="email">Email</label>
                <input type="text" placeholder="yenneralayon@gmail.com" id="email">
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
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href="">Editar</a></th>
                            <th><a href="">Eliminar</a></th>
                        </tr>
                </tbody>
            </table>
     </section>
</body>
</html>