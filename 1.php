<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Ítems con Mayor Cantidad de Calorías</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Gráfico de Ítems con Mayor Cantidad de Calorías</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <canvas id="myChart" width="900%" height="900%"></canvas>
        </div>
    </div>

    <script>
        async function fetchData() {
            try {
                const response = await fetch('http://localhost/fast-food/getItemsByCaloriesDescending.php');
                if (!response.ok) {
                    throw new Error('No se pudieron obtener los datos');
                }
                const data = await response.json();

                const items = data.map(item => item.Item);
                const calories = data.map(item => item.Calories);
                const companies = data.map(item => item.Company);

                // Crear un objeto para mapear cada compañía a un color único
                const companyColors = {};
                const uniqueCompanies = [...new Set(companies)];
                const colors = getUniqueColors(uniqueCompanies.length);

                uniqueCompanies.forEach((company, index) => {
                    companyColors[company] = colors[index];
                });

                const ctx = document.getElementById('myChart').getContext('2d');

                const datasets = uniqueCompanies.map((company, index) => {
                    const itemsForCompany = items.filter((item, i) => companies[i] === company);
                    const caloriesForCompany = calories.filter((calorie, i) => companies[i] === company);
                    const backgroundColor = companyColors[company];

                    return {
                        label: company,
                        data: caloriesForCompany,
                        backgroundColor: backgroundColor,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    };
                });

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: items,
                        datasets: datasets
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } catch (error) {
                console.error('Error:', error);
            }
        }

        fetchData();

        // Función para generar colores únicos
        function getUniqueColors(count) {
            const colors = [];
            for (let i = 0; i < count; i++) {
                const hue = (i / count) * 360;
                const color = `hsl(${hue}, 80%, 50%)`;
                colors.push(color);
            }
            return colors;
        }
    </script>
</body>
</html>
