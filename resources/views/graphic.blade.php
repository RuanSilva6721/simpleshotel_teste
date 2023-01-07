<div>
    <canvas id="myChart"></canvas>
  </div>


  <script>
    const ctx = document.getElementById('myChart');
    var array = JSON.parse('<?php echo $log; ?>');
    let saldo = [];
    let result = [];
for (let i = 0; i < array.length; i++) {

    result.push(array[i]['action']);
}
for (let i = 0; i < array.length; i++) {

    saldo.push(array[i]['value']);
}

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: result,
        datasets: [{
          label: 'Saldo na Conta',
          data: saldo,
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
  </script>
