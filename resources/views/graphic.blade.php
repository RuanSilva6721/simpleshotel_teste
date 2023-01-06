<div>
    <canvas id="myChart"></canvas>
  </div>



  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Orange2'],
        datasets: [{
          label: 'Saldo na Conta',
          data: [12, 19, 3, 5, 2, 3, 29],
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
