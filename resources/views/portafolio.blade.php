<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Styles-->

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!---------------------------  NAVBAR----------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <a class="navbar-brand mr-auto" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#portafolio">Portfolio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactme">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!---------------------------  HEADER----------------------------->
    <header class="container-fluid">
        <div class="row" style="height: 680px; background-color:#5CBD90;">
            <div class="col-12 align-self-center text-center">
                <img src="{{asset('imagenes/avatar.png')}}" class="img-fluid" width="300px" alt="">
                <h1>BIENVENIDO A MI PORTAFOLIO</h1>
                <hr>
                <p>Desarrollador Web</p>
            </div>
        </div>
    </header>

    <!----------------------------SECTION 1 (PORTAFOLIO)-------------------------------->
    <section class="container" id="portafolio">
        <div class="row  justify-content-center mb-5">
            <div class="col-12 text-center mt-5 ">
                <h2>PORTAFOLIO</h2>
                <hr>
            </div>
            <div class="col-md-4 text-center mt-2  ">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-2 ">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-2 ">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('imagenes/casa.png')}}" width="250px" alt="Opcion Casa">
            </div>

        </div>
    </section>
    <!----------------------------SECTION 2 (ABOUT)-------------------------------->
    <section class="container-fluid" id="about">
        <div class="row justify-content-center " style="background-color:#5CBD90;">
            <div class="col-12 text-center mt-5 ">
                <h4>ABOUT</h4>
                <hr>
            </div>
            <div class="col-4 mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae enim ab ducimus sapiente, non esse
                    aut mollitia cum fugit vel odio suscipit, earum neque quaerat facere facilis iusto quasi quod.</p>
            </div>
            <div class="col-4 mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae enim ab ducimus sapiente, non esse
                    aut mollitia cum fugit vel odio suscipit, earum neque quaerat facere facilis iusto quasi quod.</p>
            </div>
            <div class="col-12 text-center mb-5">
                <button type="button" class="btn btn-outline-dark btn-lg">Free Download</button>
            </div>

        </div>
    </section>

    <!----------------------------SECTION 3 (CONTACT ME )-------------------------------->

    <section class="container" id="contactme">
        <div class="row  justify-content-center mb-2">
            <div class="col-12 text-center mt-5 ">
                <h4>CONTACT ME </h4>
                <hr>
            </div>
        </div>
        <!-------------FORMULARIO DEL CONTANCT ME --------------->
        <div class="container col-6 mt-2 mb-4" style="background-color:#B0FFD9; ">
            <form>
                <div class="form-group">
                    <label for="espacio"></label>
                    <input type="text" name="name " class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="msg" id="msg" rows="3" placeholder="Tu Mensaje"></textarea>
                </div>
                <button type="button" class="btn btn-primary  mb-2">Send</button>
            </form>
        </div>
    </section>

    <!-------------FOOTER (PIE DE PAGINA) --------------->
    <footer class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-4 text-center pb-4">
                <h3>LOCATION</h3>
                <p>holaaaaa</p>
            </div>
            <div class="col-4 text-center pb-4 ">
                <h3>LOCATION</h3>
                <a href="">F</a>
                <a href="">T</a>
                <a href="">I</a>
            </div>
            <div class="col-4 text-center pb-4">
                <h3>LOCATION</h3>
                <p>Freelancer es lo mejor!</p>
            </div>
            <!-------------FOOTER 2 (PIE DE PAGINA) --------------->
            <div class="col-12 pt-3 text-center" style="background-color:#1A252F;">
                <p>Mi portafolio</p>
            </div>
        </div>
    </footer>



</body>

</html>