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

    // Aquí puedes agregar más métodos para realizar operaciones específicas con la tabla "food".
}
