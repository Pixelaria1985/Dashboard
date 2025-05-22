// Gráfico de barras (Gráfico 1)
const ctxBar = document.getElementById('barChart');
new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
            label: 'Ventas',
            data: [65, 59, 80, 81, 56],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});

// Gráfico circular 1 (Gráfico 2)
const ctxPie1 = document.getElementById('pieChart1');
new Chart(ctxPie1, {
    type: 'pie',
    data: {
        labels: ['Producto A', 'Producto B', 'Producto C'],
        datasets: [{
            data: [200, 250, 150],
            backgroundColor: [
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(54, 162, 235, 0.6)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});

// Gráfico circular 2 (Gráfico 3)
const ctxPie2 = document.getElementById('pieChart2');
new Chart(ctxPie2, {
    type: 'pie',
    data: {
        labels: ['Ventas', 'Gastos', 'Ganancias'],
        datasets: [{
            data: [300, 150, 100],
            backgroundColor: [
                'rgba(75, 192, 192, 0.6)',
                'rgba(255, 99, 132, 0.6)',
                'rgba(255, 206, 86, 0.6)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});
