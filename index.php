<?php
// Obtén los datos de visitantes únicos en los últimos 10 minutos
$visitantes = array(12, 15, 20, 25, 30, 35, 40, 45, 50, 55);

// Convierte los datos en formato JSON para su uso en JavaScript
$datos = json_encode($visitantes);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </head>
    <body>
        <p>This is an example of a simple HTML page with one paragraph.</p>
      <div id="grafica"></div>
      <script>
// Crea una nueva instancia de ApexCharts
var opciones = {
  chart: {
    type: 'line'
  },
  series: [{
    name: 'Visitantes',
    data: <?php echo $datos; ?>
  }],
  xaxis: {
    categories: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
  }
}
var grafica = new ApexCharts(document.querySelector("#grafica"), opciones);

// Dibuja la gráfica en la página
grafica.render();
</script>
    </body>
</html>
