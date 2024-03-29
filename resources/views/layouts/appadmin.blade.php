<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="backend/css/themify-icons.css">
  <link rel="stylesheet" href="backend/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="backend/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="backend/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="backend/images/logo_2H_tech.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="backend/images/2h_.png" class="mr-2" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="backend/images/logo_2H_tech.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-clipboard menu-icon"></i>
              <span class="menu-title">Création</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="basic_elements.html">Ajouter Catégories</a></li>
                <li class="nav-item"><a class="nav-link" href="advanced_elements.html">Ajouter produits</a></li>
                <li class="nav-item"><a class="nav-link" href="validation.html">Ajouter Slider</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="ti-layout menu-icon"></i>
              <span class="menu-title">Affichages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="basic-table.html">Catégories</a></li>
                <li class="nav-item"> <a class="nav-link" href="data-table.html">Produits</a></li>
                <li class="nav-item"> <a class="nav-link" href="js-grid.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="sortable-table.html">Commandes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
{{-- End Nav --}}

{{-- Debut Contenu --}}

@yield('contenu')

{{-- Fin Contenu --}}


</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="backend/js/vendor.bundle.base.js"></script>
<script src="backend/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="backend/js/off-canvas.js"></script>
<script src="backend/js/hoverable-collapse.js"></script>
<script src="backend/js/template.js"></script>
<script src="backend/js/settings.js"></script>
<script src="backend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="backend/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>