<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hospital Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: white;
      color: #000;
    }

    .navbar {
      background-color: #111;
    }

    .navbar-nav .nav-link {
      color: white !important;
      margin-right: 15px;
    }

    .logo {
      font-weight: bold;
      color: #f44336;
      letter-spacing: 1px;
    }

    .logo span {
      color: white;
    }

    #hospital-section {
      display: none; /* Hidden by default */
      scroll-margin-top: 100px;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-5 sticky-top">
  <a class="navbar-brand logo" href="#">CANVA<span>SOLUTIONS</span></a>
  <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#">Doctors</a></li>

      <!-- Hospitals Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="hospitalsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hospitals
        </a>
        <ul class="dropdown-menu" aria-labelledby="hospitalsDropdown">
          <li><a class="dropdown-item" href="#">Hospitals in Lahore</a></li>
          <li><a class="dropdown-item" href="#">Hospitals in Karachi</a></li>
          <li><a class="dropdown-item" href="#">Hospitals in Islamabad</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item" href="#hospital-section" onclick="showHospitalSection()">All Hospitals (City wise)</a>
          </li>
        </ul>
      </li>

      <li class="nav-item"><a class="nav-link" href="#">Surgeries</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Medicines</a></li>

      <!-- Laravel Auth -->
      @if (Route::has('login'))
        @auth
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light ms-3" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary ms-3" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link btn btn-primary ms-2" href="{{ route('register') }}">Register</a>
            </li>
          @endif
        @endauth
      @endif
    </ul>
  </div>
</nav>

<!-- Optional Welcome Content -->
<div class="container mt-5">
  <h1 class="text-center mb-5">Welcome to Our Healthcare Portal</h1>
</div>

<!-- Hospital Info Section (Hidden by default) -->
<div id="hospital-section" class="container py-5 mt-5" style="display: none;">

  <!-- Card 1: Top Hospitals -->
  <div class="card mb-5 p-4">
    <h3 class="mb-4">Top Hospitals of Pakistan</h3>
    <div class="row mb-4">
      <div class="col-md-4">
        <a href="#" class="fw-bold text-primary">Lahore Care Hospital, Lahore</a>
        <p>63 Doctors Available</p>
      </div>
      <div class="col-md-4">
        <a href="#" class="fw-bold text-primary">Pulse Medical Complex, Lahore</a>
        <p>41 Doctors Available</p>
      </div>
      <div class="col-md-4">
        <a href="#" class="fw-bold text-primary">Health City Hospital, Lahore</a>
        <p>43 Doctors Available</p>
      </div>
      <div class="col-md-4 mt-3">
        <a href="#" class="fw-bold text-primary">Hashmanis Hospital, Karachi</a>
        <p>81 Doctors Available</p>
      </div>
      <div class="col-md-4 mt-3">
        <a href="#" class="fw-bold text-primary">Metropolis Health Hospital, Karachi</a>
        <p>62 Doctors Available</p>
      </div>
    </div>
  </div>

  <!-- Card 2: Hospitals in Top Cities -->
  <div class="card p-4 mb-5">
    <h4 class="mb-3">Hospitals in Top Cities of Pakistan</h4>
    <p>10 Million+ people have used MARHAM!</p>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col"><strong>Lahore</strong><br>15,112 Doctors Available</div>
      <div class="col"><strong>Karachi</strong><br>14,734 Doctors Available</div>
      <div class="col"><strong>Islamabad</strong><br>5,452 Doctors Available</div>
      <div class="col"><strong>Rawalpindi</strong><br>3,528 Doctors Available</div>
      <div class="col"><strong>Faisalabad</strong><br>2,318 Doctors Available</div>
      <div class="col"><strong>Gujranwala</strong><br>1,031 Doctors Available</div>
    </div>
  </div>

  <!-- Card 3: Hospitals in Other Cities -->
  <div class="card shadow p-4">
    <div class="card-header bg-primary text-white mb-3">
      <h5 class="mb-0">Hospitals in Other Cities of Pakistan</h5>
    </div>
    <div class="card-body">
      <div class="row">
        @php
          $cities = [
            'Lahore', 'Karachi', 'Islamabad', 'Peshawar', 'Quetta', 'Faisalabad',
            'Multan', 'Rawalpindi', 'Gujranwala', 'Sialkot', 'Sargodha', 'Hyderabad',
            'Sukkur', 'Bahawalpur', 'Abbottabad', 'Mardan', 'Swat', 'Dera Ghazi Khan',
            'Rahim Yar Khan', 'Muzaffargarh', 'Okara', 'Sheikhupura', 'Jhang', 'Kasur',
            'Vehari', 'Chiniot', 'Kohat', 'Mirpur', 'Gilgit', 'Skardu', 'Mansehra',
            'Gwadar', 'Turbat', 'Khuzdar', 'Larkana', 'Jacobabad', 'Dadu', 'Bannu',
            'Charsadda', 'Nowshera', 'Sahiwal', 'Attock', 'Bahawalnagar', 'Hafizabad',
            'Narowal', 'Layyah', 'Bhakkar', 'Toba Tek Singh', 'Mianwali', 'Khairpur','Mandi'
          ];
        @endphp

        @foreach ($cities as $city)
          <div class="col-md-4 mb-2">
            <span class="d-block">{{ $city }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>

</div>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function showHospitalSection() {
    const section = document.getElementById("hospital-section");
    section.style.display = "block";
  }
</script>

</body>
</html>
