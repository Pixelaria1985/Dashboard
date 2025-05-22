<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="container mt-4">
    <h2>Gráficos Circulares</h2>

    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <h5>Título 1</h5>
            <div class="chart-container mx-auto" style="max-width: 400px;">
                <canvas id="pieChart1"></canvas>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <h5>Título 2</h5>
            <div class="chart-container mx-auto" style="max-width: 400px;">
                <canvas id="pieChart2"></canvas>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/chart-pie-dos.js"></script>
