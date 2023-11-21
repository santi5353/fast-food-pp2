 <?php
class productsModel {
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'fastfood');
        mysqli_set_charset($this->conexion, 'utf8');
    }

    public function getProducts() {
        $products = [];
        $sql = "SELECT * FROM food";
        $registros = mysqli_query($this->conexion, $sql);
        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($products, $row);
        }
        return $products;
    }

    public function getFood() {
        $food = [];
        $sql = "SELECT * FROM food";
        $registros = mysqli_query($this->conexion, $sql);
        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($food, $row);
        }
        return $food;
    }

    public function getCompanies() {
        $companies = [];
        $sql = "SELECT DISTINCT company FROM food"; // Utilizamos DISTINCT para obtener compañías únicas
        $registros = mysqli_query($this->conexion, $sql);
        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($companies, $row['company']);
        }
        return $companies;
    }
    public function getItemsByCaloriesDescending() {
        $itemsData = [];
        $sql = "SELECT Company, Item, Calories FROM food ORDER BY Calories DESC";

        $registros = mysqli_query($this->conexion, $sql);

        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($itemsData, $row);
        }

        return $itemsData;
    }

   
    public function getNutrientsComparisonData()
    {
        $cholesterolData = [];
        $sql = "SELECT Company, AVG(`Cholesterol_mg`) as AverageCholesterol FROM food GROUP BY Company";

        $registros = mysqli_query($this->conexion, $sql);

        if ($registros === false) {
            die("Error en la consulta: " . mysqli_error($this->conexion));
        }

        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($cholesterolData, $row);
        }

        return $cholesterolData;
    }

    public function getSugarPercentageData()
    {
        $sugarPercentageData = [];
        $sql = "SELECT Company, AVG(Sugars_g) AS AverageSugar FROM food GROUP BY Company";

        $registros = mysqli_query($this->conexion, $sql);

        if ($registros === false) {
            die("Error en la consulta: " . mysqli_error($this->conexion));
        }

        while ($row = mysqli_fetch_assoc($registros)) {
            array_push($sugarPercentageData, $row);
        }

        return $sugarPercentageData;
    }

    public function getTotalFatPercentageByCompany()
    {
        $totalFatData = [];
        $sql = "SELECT Company, 
                       SUM(`Total_Fat_g`) AS TotalFat,
                       SUM(`Calories`) AS TotalCalories
                FROM food 
                GROUP BY Company";

        $registros = mysqli_query($this->conexion, $sql);

        if ($registros === false) {
            die("Error en la consulta: " . mysqli_error($this->conexion));
        }

        while ($row = mysqli_fetch_assoc($registros)) {
            $percentage = ($row['TotalFat'] / $row['TotalCalories']) * 100;
            $row['TotalFatPercentage'] = round($percentage, 2);
            array_push($totalFatData, $row);
        }

        return $totalFatData;
    }

}
