<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="container mt-4">
    <h2>Gráficos Combinados</h2>

    <!-- Gráfico de barras -->
    <h4 class="text-center mb-4">Gráfico 1</h4>
    <div class="chart-container mx-auto" style="max-width: 700px;">
        <canvas id="barChart"></canvas>
    </div>

    <!-- Gráficos circulares -->
    <h4 class="text-center mb-4">Gráficos 2 y 3</h4>
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <h5>Gráfico 2</h5>
            <div class="chart-container mx-auto" style="max-width: 400px;">
                <canvas id="pieChart1"></canvas>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <h5>Gráfico 3</h5>
            <div class="chart-container mx-auto" style="max-width: 400px;">
                <canvas id="pieChart2"></canvas>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/chart-combined.js"></script>
