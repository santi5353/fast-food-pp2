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
}
