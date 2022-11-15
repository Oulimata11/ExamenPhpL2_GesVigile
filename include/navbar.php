<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
    </head> 
<body>
<nav class="navbar navbar-light fixed-top" style="background-color:#F0F8FF">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">GESTIONNAIRE VIGILE</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color:#F0F8FF;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h4 class="offcanvas-title" id="offcanvasNavbarLabel">MENU GENERAL</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer  les vigiles
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formVigile.php">Ajouter Vigile</a></li>
                    <li><a class="dropdown-item" href="../pages/listingVigile.php">Liste des vigiles</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer les affectations
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formAffectation.php">Ajouter Affectation</a></li>
                    <li><a class="dropdown-item" href="../pages/listingAffectation.php">Liste des affectations</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer les Localités
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formLocalite.php">Ajouter Localité</a></li>
                    <li><a class="dropdown-item" href="../pages/listingLocalite.php">Liste des localités</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer les formations
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formFormation.php">Ajouter formation</a></li>
                    <li><a class="dropdown-item" href="../pages/listingFormation.php">Liste des formations</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer les zones
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formZone.php">Ajouter Zone</a></li>
                    <li><a class="dropdown-item" href="../pages/listingZone.php">Liste des zones</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h5" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gérer les Offres
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../pages/formOffre.php">Ajouter Offre</a></li>
                    <li><a class="dropdown-item" href="../pages/listingOffre.php">Liste des offres</a></li>
                </ul>
            </li>

            <p text-align="justify"> 
                  <h6>
                       <a href="../sessions/deconnexion.php"> Se Déconnecter</a> 
                  </h6>
                </p>

             
          </ul>
      </div>
    </div>
  </div>
</nav>

<style>
@import url(
    'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');

*{
    margin: 0;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}


</style>

</body>
</html>