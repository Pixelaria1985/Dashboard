<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="container mt-4">
    <h2>Gráfico Circular</h2>
    <div class="chart-container mx-auto" style="max-width: 500px;">
        <canvas id="pieChart"></canvas>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/chart-pie.js"></script>
