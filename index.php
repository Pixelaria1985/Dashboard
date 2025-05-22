<!--Para que comience en el login.php-->
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!--Para que comience en el login.php-->

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>



<main class="container mt-4">
    <h2>Bienvenido al Panel de Control</h2>
    <p>Selecciona una opción del menú para comenzar.</p>
</main>

<?php include 'footer.php'; ?>
