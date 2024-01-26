<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Reservation System</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/nav.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light main-nav" id="navbar">
        <div class="container-fluid">
            <img src="./Image/n_logo_sistec.png" alt="" width="200" height="80">
            <a class="navbar-brand fs-2 text-white nav_hove" href="#">RESUME_BUILDER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active text-white nav_hover" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Create Resume</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Edit Resume</a>
                    </li>

                    <li class="nav-item dropdown" id="templates">
                        <!-- <a class="nav-link dropdown-toggle text-white nav_hover" href="templates.php" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Templates</a>                         -->
                        <a class="nav-link dropdown-toggle text-white nav_hover" href="templates.php">Templates</a>


                    </li>

                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white nav_hover" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Templates</a>                        
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="http://localhost/resume/">Resume-1</a></li>
                                <li><a class="dropdown-item" href="http://localhost/resumemaker-php-master/">Resume-2</a></li>
                                <li><a class="dropdown-item" href="http://localhost/sharmila_mewada/">Resume-3</a></li>
                                <li><a class="dropdown-item" href="http://localhost/resume/">Resume-4</a></li>
                            </ul>
                        </li> -->

                    <li class="nav-item">


                        <a class="nav-link active text-white nav_hover" aria-current="page" href="#">Account Settings</a>
                    </li>

                    <li class="nav-item dropdown" id="templates">
                        <a class="nav-link dropdown-toggle text-white nav_hover" href="TemplatesLogin.php">Login</a>
                    </li>
            </div>
        </div>
    </nav>


</body>

</html>