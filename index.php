<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<body>
    <div class="ban">
        <video autoplay muted loop plays-inline class="video" id="mvideo">
            <source src="/assets/images/batiment.webm" type="video/webm">
        </video>
        <header class="nav">
            <div class="container cool">
                <div class="d-flex">
                    <button class="btn btni py-0" data-bs-toggle="collapse" 
                        href="#btnNav" aria-expanded="false" 
                        aria-controls="btnNav">
                        <i class="bi bi-list py-0"></i>
                    </button>
                    <div class="logo mx-4">
                        <a class="navbar-brand" href="/">gr<span>a</span>villa</a>
                    </div>
                </div>
                <div class="bnt">
                    <ul class="d-flex mx-2">
                        <li class="mx-2 reso"><i class="bi bi-facebook"></i></li>
                        <li class="mx-2 reso"><i class="bi bi-instagram"></i></li>
                        <li class="mx-2 reso"><i class="bi bi-twitter"></i></li>
                        <li class="mx-2 reso"><i class="bi bi-linkedin"></i></li>
                    </ul>
                    <button class="btn btn-outline-primary me-2 text-white" type="button">Vous-avez un projet ?</button>
                </div>
                <div class="collapse" id="btnNav">
                    <div class="cadre mt-2 px-3">
                        <ul class="navbar-nav pt-4">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Acceuil</a>
                            </li><hr>
                            <li class="nav-item">
                                <a href="pages/a-propos.php" class="nav-link">A propos</a>
                            </li><hr>
                            <li class="nav-item">
                                <a href="/pages/contact.php" class="nav-link">Contacter nous</a>
                            </li><hr>
                            <li class="nav-item">
                                <a href="pages/realisations.php" class="nav-link">Projets Réalisés</a>
                            </li><hr>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="main">
            <div class="container pt-2">
                <div class="row">
                    <div class="col-md-6 col-lg-6 pt-4 d-flex">
                        <div class="px-4 text-white">
                            <i class="material-icons">apartment</i>
                            <h4>Titre 1</h4>
                        </div>        
                    
                        <div class="px-4 text-white">
                            <i class="material-icons">warehouse</i>
                            <h4>Titre 1</h4>
                        </div>        
                    
                        <div class="px-4 text-white">
                            <i class="material-icons">factory</i>
                            <h4>Titre 1</h4>
                        </div>  
                    </div>
                    <div class="col-md-6 col-lg-6 pt-4 navbar justify-content-end">
                        <h3>Gravilla Construction</h3>
                        <p class="text-light">
                            Le professionnel en Construction
                        </p>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>