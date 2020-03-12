<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--  Link bootstrap -->
    <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>


</head>
<body class="container">


<!-- Nabar show -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

    <a class="navbar-brand text-white" href="#">Responsive</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1"
            aria-controls="navbar1" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Find</a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">DUT</a>
                    <a class="dropdown-item" href="#">Engineer</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Master</a>
                </div>
            </li>




        </ul>

        <!--
         <form class="form-inline">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
       -->
    </div>
</nav>

<!--  This is use jumbotron -->







<!-- footer -->



<div class="jumbotron">
    <div class="container text-center text-pink">
        <h1>Home Page Responsive</h1>
        <p>
            This is a template for a simple marketing or informational
            website. It includes a large callout called the hero unit
            and three supporting pieces of content. Use it as a
            starting point to create something more unique.
        </p>




        <!--
         <a class="btn btn-info btn-lg" href="#"> Free Trail » </a>
         <a class="btn btn-primary btn-lg" href="#">View Serices » </a>
        <
 -->

        <form class="form-inline justify-content-center">
            <input class="form-control mr-sm-2 text-light bg-dark " type="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success bg-dark text-light" type="submit">Search</button>
        </form>


    </div>
</div>



<!--  Grid -->

<div class="container">
    <div class="row " >
        <!-- Column 2  -->
        <div class="col-12 col-sm-6 col-md-3 mt-2 text-pink ">

            <div class="bg-light text-primary  rounded round-lg  text-center p-4 ">


                <i class="fas fa-apple-alt text-pink"></i>
                <p class="align-content-center text-pink text-pink"> Apple</p>

            </div>

        </div>
        <!-- Column 2  -->
        <div class="col-12 col-sm-6 col-md-3 mt-2 text-pink">

            <div class="bg-light  rounded round-lg text-center p-4">

                <i class="fas fa-balance-scale "></i>
                <p class="align-content-center "> Law</p>

            </div>

        </div>
        <!-- Column 3  -->
        <div class="col-12 col-sm-6 col-md-3 mt-2 text-primary text-pink">

            <div class="bg-light  rounded round-lg  text-center p-4">

                <i class="fas fa-align-justify "></i>
                <p class="align-content-center "> Navigate</p>

            </div>

        </div>
        <!-- Column 4  -->
        <div class="col-12 col-sm-6 col-md-3 mt-2 text-pink">

            <div class="bg-light rounded round-lg text-center p-4">

                <i class="fas fa-bicycle"></i>
                <p class="align-content-center "> Motobile </p>

            </div>

        </div>

    </div>
    <!--  end row -->

    <div class="container">

        <i class="fas fa-at"></i>
        Copy right 2020 ..

    </div>

</div>



</body>
</html>