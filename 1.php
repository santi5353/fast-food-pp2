<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast-Food</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <link rel="stylesheet" href="css/app.css">
    <script defer src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="">
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <div class="row">

        <!-- Gráfico 1 -->
        <div class="container col-10">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center mt-2">Gráfico de Ítems con Mayor Cantidad de Calorías</h1>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="900%" height="900%"></canvas>
                </div>
                <div class="card-footer">
                    <p class="text-dark">Este gráfico muestra la cantidad de calorías en los ítems y su impacto en la salud.</p>
                    <p>Las calorías, esenciales para el funcionamiento del cuerpo, son fuente de energía que nos permite llevar a cabo nuestras actividades diarias. En el contexto positivo, consumir una cantidad adecuada de calorías es fundamental para mantener un equilibrio energético y respaldar funciones vitales. Estas calorías se obtienen de alimentos ricos en nutrientes que proporcionan vitaminas, minerales y otros elementos esenciales para el organismo.

Sin embargo, el exceso de calorías puede tener consecuencias negativas para la salud. Una ingesta desproporcionada puede conducir al aumento de peso, contribuyendo a condiciones como la obesidad, que a su vez se asocia con diversos problemas de salud, como enfermedades cardíacas, diabetes tipo 2 y otros trastornos metabólicos. Además, el consumo excesivo de calorías vacías, provenientes de alimentos procesados y con bajo valor nutricional, puede llevar a deficiencias nutricionales y afectar la calidad general de la dieta.

En resumen, mientras que las calorías son esenciales para la supervivencia y el bienestar, es crucial mantener un equilibrio adecuado y elegir fuentes de calorías que contribuyan a una dieta equilibrada y nutritiva. La conciencia sobre la calidad de las calorías consumidas y una combinación adecuada con otros nutrientes son fundamentales para promover la salud a largo plazo.</p>
                </div>
            </div>
        </div>

        <!-- Gráfico 2 -->
        <div class="container col-10">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h1 class="text-center mt-2">Gráfico de Diferencias de Colesterol por Compañía</h1>
                    <p></p>
                </div>
                <div class="card-body">
                    <canvas id="cholesterolChart" width="900%" height="900%"></canvas>
                </div>
                <div class="card-footer">
                    <p class="text-dark">Este gráfico compara los niveles de colesterol entre diferentes compañías y su impacto en la salud.</p>
                    <p>El colesterol es una sustancia fundamental para el cuerpo, ya que desempeña un papel crucial en la construcción de membranas celulares y la producción de hormonas. En su aspecto beneficioso, el colesterol es esencial para funciones biológicas clave. Sin embargo, cuando se acumula en exceso en el torrente sanguíneo, puede tener efectos perjudiciales para la salud.

El lado positivo del colesterol radica en su participación en la formación de ácidos biliares, necesarios para la digestión de las grasas, y en la síntesis de vitamina D, esencial para la salud ósea. No obstante, niveles elevados de colesterol en la sangre, especialmente del tipo LDL (colesterol de baja densidad), están asociados con un mayor riesgo de enfermedades cardiovasculares.

El exceso de colesterol puede acumularse en las paredes de las arterias, formando placas que, con el tiempo, pueden estrechar las arterias y dificultar el flujo sanguíneo. Esto puede aumentar el riesgo de ataques cardíacos y accidentes cerebrovasculares. Por lo tanto, es crucial mantener un equilibrio adecuado de colesterol mediante la adopción de hábitos de vida saludables y la elección de una dieta equilibrada y baja en grasas saturadas.

En resumen, si bien el colesterol desempeña funciones esenciales en el cuerpo, es vital mantenerlo en niveles equilibrados para prevenir riesgos para la salud cardiovascular. Concientizar sobre las fuentes de colesterol y adoptar un estilo de vida saludable son pasos fundamentales para garantizar el bienestar a largo plazo.</p>
                </div>
            </div>
        </div>

        <!-- Gráfico 3 -->
        <div class="container col-10">
            <div class="card mb-3">
                <div class="card-header bg-warning text-dark">
                    <h1 class="text-center mt-2">Porcentaje de Azúcar por Compañía</h1>
                </div>
                <div class="card-body">
                    <canvas id="sugarPercentageChart" width="400" height="400"></canvas>
                </div>
                <div class="card-footer">
                    <p class="text-dark">Este gráfico muestra el porcentaje de azúcar en productos de diferentes compañías y su impacto en la salud.</p>
                    <p>El azúcar es una sustancia que proporciona energía inmediata al cuerpo y es un componente natural de muchos alimentos, como frutas y vegetales. En su aspecto positivo, el azúcar desempeña un papel esencial en el suministro de combustible para las células y en la función cerebral. Sin embargo, el consumo excesivo de azúcar, especialmente en forma de azúcares añadidos, puede tener impactos negativos significativos en la salud.

En el lado beneficioso, el azúcar es una fuente rápida de energía, brindando un impulso inmediato en momentos de necesidad. Además, el azúcar natural presente en alimentos como frutas y lácteos también aporta nutrientes esenciales. No obstante, el consumo excesivo de azúcares añadidos, común en alimentos procesados y bebidas azucaradas, se ha asociado con diversos problemas de salud.

El azúcar en exceso puede contribuir al aumento de peso, aumentar el riesgo de enfermedades cardíacas y provocar problemas metabólicos, como resistencia a la insulina. El consumo elevado de azúcar también está relacionado con el desarrollo de enfermedades crónicas, como la diabetes tipo 2. Por lo tanto, es crucial moderar la ingesta de azúcares añadidos y optar por fuentes naturales de azúcar, como frutas, para mantener un equilibrio saludable.

En resumen, si bien el azúcar es una fuente importante de energía, su consumo en exceso, especialmente en forma de azúcares añadidos, puede tener consecuencias negativas para la salud. Adoptar hábitos alimenticios conscientes y equilibrados es esencial para garantizar que el azúcar se consuma en cantidades que respalden la salud a largo plazo.</p>
                </div>
            </div>
        </div>

        <!-- Gráfico 4 -->
        <div class="container col-10">
            <div class="card mb-3">
                <div class="card-header bg-danger text-white">
                    <h1 class="text-center mt-2">Porcentaje Estimado de Total Fat por Compañía</h1>
                </div>
                <div class="card-body">
                    <canvas id="totalFatPercentageByCompanyChart" width="900%" height="900%"></canvas>
                </div>
                <div class="card-footer">
                    <p class="text-dark">Este gráfico muestra el porcentaje estimado de grasas en productos de diferentes compañías y su impacto en la salud.</p>
                    <p>Las grasas totales son un componente esencial de la dieta que desempeñan varios roles cruciales en el cuerpo. Por un lado, las grasas proporcionan una fuente concentrada de energía, ayudan en la absorción de vitaminas liposolubles y son fundamentales para la estructura celular. Sin embargo, como ocurre con muchos aspectos de la nutrición, el equilibrio y la moderación son clave para cosechar los beneficios sin incurrir en riesgos para la salud.

En el aspecto positivo, las grasas totales son una fuente eficiente de energía que el cuerpo utiliza para diversas funciones, como el mantenimiento de la temperatura corporal y la producción de hormonas. Además, las grasas saludables, como las presentes en aceites vegetales, frutos secos y pescados grasos, son fundamentales para la salud cardiovascular y el bienestar general.

No obstante, el consumo excesivo de grasas totales, especialmente las saturadas y trans, se ha asociado con problemas de salud, como enfermedades cardíacas y aumento del colesterol LDL ("colesterol malo"). Es importante elegir fuentes de grasas saludables y limitar la ingesta de grasas poco saludables para mantener un equilibrio adecuado.

En resumen, las grasas totales son esenciales para el funcionamiento adecuado del cuerpo y ofrecen beneficios significativos cuando se consumen con moderación y provenientes de fuentes saludables. Mantener una dieta equilibrada y centrada en grasas saludables contribuye a una buena salud a largo plazo.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include 'footer.php'; ?>


 
    <script>
        async function fetchData() {
            try {
                const response = await fetch('http://localhost/fast-food/controller/getItemsByCaloriesDescending.php');
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
                        labels: companies,
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
        async function fetchCholesterolData() {
    try {
        const response = await fetch('http://localhost/fast-food/controller/getNutrientsComparison.php');
        if (!response.ok) {
            throw new Error('No se pudieron obtener los datos');
        }
        const data = await response.json();

        const companies = data.map(entry => entry.Company);
        const averageCholesterol = data.map(entry => entry.AverageCholesterol);

        const uniqueColors = generateUniqueColors(companies.length);

        const ctx = document.getElementById('cholesterolChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: companies,
                datasets: [{
                    label: 'Promedio de Colesterol',
                    data: averageCholesterol,
                    backgroundColor: uniqueColors,
                    borderColor: 'rgba(255, 255, 255, 1)', // Puedes ajustar el color del borde si es necesario
                    borderWidth: 1
                }]
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

function generateUniqueColors(count) {
    const colors = [];
    for (let i = 0; i < count; i++) {
        const hue = (i / count) * 360;
        const color = `hsl(${hue}, 80%, 50%)`;
        colors.push(color);
    }
    return colors;
}

fetchCholesterolData();


async function fetchSugarPercentageData() {
        try {
            const response = await fetch('http://localhost/fast-food/controller/getSugarPercentage.php');
            if (!response.ok) {
                throw new Error('No se pudieron obtener los datos');
            }
            const data = await response.json();

            const companies = data.map(entry => entry.Company);
            const averageSugar = data.map(entry => entry.AverageSugar);

            // Generar colores únicos para cada compañía
            const uniqueColors = generateUniqueColors(companies.length);

            const ctx = document.getElementById('sugarPercentageChart').getContext('2d');

            new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: companies,
                    datasets: [{
                        label: 'Porcentaje de Azúcar',
                        data: averageSugar,
                        backgroundColor: uniqueColors,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
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

    // Función para generar colores únicos
    function generateUniqueColors(count) {
        const colors = [];
        for (let i = 0; i < count; i++) {
            const hue = (i / count) * 360;
            const color = `hsl(${hue}, 80%, 50%)`;
            colors.push(color);
        }
        return colors;
    }

    fetchSugarPercentageData();


    async function fetchTotalFatPercentageByCompany() {
    try {
        const response = await fetch('http://localhost/fast-food/controller/totalFatController.php');
        if (!response.ok) {
            throw new Error('No se pudieron obtener los datos');
        }
        const data = await response.json();

        const companies = data.map(entry => entry.Company);
        const totalFatPercentages = data.map(entry => entry.TotalFatPercentage);

        const ctx = document.getElementById('totalFatPercentageByCompanyChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: companies,
                datasets: [{
                    label: 'Porcentaje Estimado de Total Fat por Compañía',
                    data: totalFatPercentages,
                    backgroundColor: ['rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 205, 86, 0.5)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 205, 86, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return 'Porcentaje: ' + context.parsed.toFixed(2) + '%';
                            }
                        }
                    }
                }
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }
}

fetchTotalFatPercentageByCompany();


    </script>
</body>
</html>
