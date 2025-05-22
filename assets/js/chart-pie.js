const ctxPie = document.getElementById('pieChart');

new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: ['Ventas', 'Gastos', 'Ganancias'],
        datasets: [{
            label: 'Distribución',
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
