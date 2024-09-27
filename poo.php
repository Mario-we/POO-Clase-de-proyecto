<?php
class Melodia{
    public $marca;
    public $placas;
    public $color;
    public $numserie;


    public function __construct($_marca, $_placas, $_color, $_numserie)
    {
        $this->marca = $_marca;
        $this->placas = $_placas;
        $this->color = $_color;
        $this->numserie = $_numserie;
    }

    public function imprimir()
    {
        echo "<div style='border: 2px solid #007BFF; padding: 15px; border-radius: 8px; max-width: 300px; background-color: #f8f9fa; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 20px;'>";
        echo "<h2 style='text-align: center; color: #007BFF; font-family: Arial, sans-serif;'>Información del Vehículo</h2>";
        echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'><strong>Marca del carro:</strong> " . $this->marca . "</p>";
        echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'><strong>Placa:</strong> " . $this->placas . "</p>";
        echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'><strong>Color:</strong> " . $this->color . "</p>";
        echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'><strong>Número de serie:</strong> " . $this->numserie . "</p>";
        echo "</div>";

    }
}


$melodia1 = new Melodia("international", "33p85GJ1", "Amarillo", "8465184");

$melodia2 = new Melodia("kenworth", "h453GJ12", "Rojo", "61321651");

$melodia3 = new Melodia("Volvo", "J684GJ78", "Blanco", "9842165");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
</head>
<body>
    <h1>Vehículos Registrados</h1>

    <?php
        // Imprimir el HTML de cada vehículo
        echo $melodia1->imprimir();
        echo $melodia2->imprimir();
        echo $melodia3->imprimir();
    ?>
    
</body>
</html>