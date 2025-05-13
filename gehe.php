<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    .nav-link:hover {
      background-color: gold;
      color: white !important;
    }
    .chart-container {
      width: 45%;
      height: 400px;
      margin: auto;
    }

    .card .price {
      color: #2ecc71;
      font-weight: bold;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN....</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ms-auto d-flex align-items-center">
          <div class="icon">
            <i class="fas fa-envelope-square me-3"></i>
            <i class="fas fa-bell-slash me-3"></i>
            <i class="fas fa-user-circle me-3"></i>
            <i class="fas fa-sign-out-alt me-3"></i>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Layout -->
  <div class="row g-0 mt-5">
    <!-- Sidebar -->
    <div class="col-md-2 bg-info mt-2 pt-4">
      <ul class="nav flex-column ms-3 mb-5">
        <li class="nav-item"><a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-secondary"></li>
        
        <li class="nav-item"><a class="nav-link text-white" href="pendapatan.php"><i class="fas fa-money-bill-wave me-2"></i>Pendapatam</a><hr class="bg-secondary"></li>
        <li class="nav-item"><a class="nav-link text-white" href="data_menu.php"><i class="fas fa-book me-2"></i>Data Menu</a><hr class="bg-secondary"></li>
      
        
      </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-hamburger me-2"></i> DASHBOARD ADMIN</h3><hr>

      <!-- Dashboard Cards -->
      <div class="row text-white mb-4">
        <div class="col-md-4">
          <div class="card bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-users"></i> Pesanan</h5>
              <p class="card-text">Total: 100</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-book-open"></i> Menu</h5>
              <p class="card-text">Total: 50</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-4">
          <div class="card bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-dollar-sign"></i> Pendapatan</h5>
              <p class="card-text">Total: 30</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Grafik Section -->
 
  
  <div class="container mt-5">
    <h1 class="text-center mb-4">Pendapatan Penjualan Perbulan</h1>
    <canvas id="myChart" width="150" height="50"></canvas>
  </div>


  <!-- Chart.js Script -->

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  const data = {
      labels: labels,
      datasets: [{
          label: 'Pendapatan',
          data: [50, 70, 90, 120, 160, 200, 250, 300, 360, 420, 480, 550],
          backgroundColor: [
              'rgba(0, 153, 255, 0.8)',
              'rgba(0, 204, 255, 0.8)',
              'rgba(0, 255, 204, 0.8)',
              'rgba(0, 255, 153, 0.8)',
              'rgba(0, 255, 102, 0.8)',
              'rgba(0, 255, 51, 0.8)',
              'rgba(51, 255, 0, 0.8)',
              'rgba(102, 255, 0, 0.8)',
              'rgba(153, 255, 0, 0.8)',
              'rgba(204, 255, 0, 0.8)',
              'rgba(255, 204, 0, 0.8)',
              'rgba(255, 153, 0, 0.8)'
          ],
          borderColor: 'rgba(0, 0, 0, 0.1)',
          borderWidth: 1
      }]
  };

  const config = {
      type: 'bar',
      data: data,
      options: {
          responsive: true,
          plugins: {
              legend: {
                  display: false
              }
          },
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  };

  const myChart = new Chart(
      document.getElementById('myChart'),
      config
  );
</script>


  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
