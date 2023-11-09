<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Compañías</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Gráfico de Compañías</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>

    <script>
        async function fetchData() {
            try {
                const response = await fetch('http://localhost/fast-food/productsCompany.php');
                if (!response.ok) {
                    throw new Error('No se pudieron obtener los datos');
                }
                const data = await response.json();

                const companies = data;

                const ctx = document.getElementById('myChart').getContext('2d');

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: companies,
                        datasets: [{
                            data: new Array(companies.length).fill(1),
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 159, 64, 0.6)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        // Personaliza las opciones del gráfico según tus necesidades
                    }
                });
            } catch (error) {
                console.error('Error:', error);
            }
        }

        fetchData();
    </script>
</body>
</html>
