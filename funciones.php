<?php  
function potencia($base, $exponente) {
    return pow($base, $exponente);
}

function factorial($numero) {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

function sumatoria($n) {
    $resultado = 0;
    for ($i = 1; $i <= $n; $i++) {
        $resultado += potencia($i, 2) / factorial($i);
    }
    return $resultado;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = $_POST['n'];
    $resultado = sumatoria($n);
} else {
    $resultado = '';
}
?>
<style>
    /* Estilo para el formulario */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

label {
  font-size: 24px;
  color: #FF69B4;
  margin-bottom: 10px;
}

input[type="number"] {
  padding: 10px;
  border: none;
  border-radius: 30px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  font-size: 20px;
  color: #FF69B4;
  background-color: #F0F0F0;
}

button[type="submit"] {
  background-color: #FF69B4;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  transition: 0.3s;
  font-size: 20px;
}

button[type="submit"]:hover {
  background-color: #FF1493;
}

/* Estilo para el resultado */
p {
  font-size: 28px;
  margin-top: 50px;
  text-align: center;
  color: #FF69B4;
  font-weight: bold;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}
</style>
<form method="post">
    <h1>Calcular Sumatoria</h1>
    <label for="n">Ingrese el valor de n:</label>
    <input type="number" name="n" id="n">
    <button type="submit">Calcular</button>
</form>

<?php if ($resultado !== ''): ?>
    <p>La sumatoria para n = <?php echo $n; ?> es: <?php echo $resultado; ?></p>
<?php endif; ?>