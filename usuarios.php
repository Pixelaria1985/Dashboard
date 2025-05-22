<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="container mt-4">
    <h2>Gestión de Usuarios</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>juan@example.com</td>
                <td>Administrador</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lucía Gómez</td>
                <td>lucia@example.com</td>
                <td>Editor</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Marco Ruiz</td>
                <td>marco@example.com</td>
                <td>Usuario</td>
            </tr>
        </tbody>
    </table>
</main>

<?php include 'footer.php'; ?>
