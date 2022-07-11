<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesom/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title ;?></title>
</head>
<body>
    <div class="super_container">

    <nav class="navbar navbar-expand-lg navbar-dark bg- " id="navbar">
        <a class="navbar-brand oh1" href="index.php">SHINNER OUTFITS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Acceuil</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Custom</a>
                    <div class="dropdown-menu">
                       <a href="#" class="dropdown-item">Custom</a> 
                        <a href="#" class="dropdown-item">Jeans</a>
                        <a href="#" class="dropdown-item">Jacket</a>
                        <a href="#" class="dropdown-item">Shoes</a>
                        
                    </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Outfits</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Hauts</a>
                        <a href="#" class="dropdown-item">Bas</a>
                        <a href="#" class="dropdown-item">Accessoire</a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page/collection.html">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page/divertissement.php">Divertissement</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="page/apropos.php">A propos</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-succes my-2 my-sm-0" type="submit"><b class="bouton">Recherche</b> </button>
            </form>
        </div>

    </nav>