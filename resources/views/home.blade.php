<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"
        integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="justify-content-start d-flex" style="margin-left:10px; margin-top:10px; height: 70px; width: 180px;">
        <img src="sesi.png" class="img-thumbnail" alt="...">
    </div>
    <div style="margin-left:200px; margin-top:-75px; height:20; width:600;">
        <img src="redred.jpg" class="img-thumbnail-danger" alt="...">
    </div>
    <div>
        <h6 style="margin-left: 210px; margin-top: -60px;">SERVIÇO SOCIAL <br>DA INDÚTRIA</h6>
    </div>

    <nav class="navbar nav-pills navbar-expand-lg bg-body-danger"
        style="background-color: rgb(253, 1, 1); padding: -5rem; width: 24%; left:75%; top: -3rem; border-radius: 30px; border: 1px solid rgb(255, 0, 0);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="justify-content-center d-flex">
                    <ul class="navbar-nav ms-auto justify-content-center d-flex gap-3" style="margin-right: 15px;">
                        <li class="nav-item">
                            <a class="nav-link active fonte" style="background-color: rgb(252, 252, 252);"
                                aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Aluno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Calendário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Professor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center" style="margin-top: 20px;">Bem-vindo à Página Inicial, {{ $professor->nome }}</h1>
    </div>
    <div class="justify-content-start d-flex" style="height: 40px; width: 150px;margin-top:470px;">
        <img src="logo_umbrella.png" class="img-thumbnail p-2" alt="...">
    </div>
    <div>
        <h6 class="fonte" style="margin-left: 43px; margin-top: -30px;">Umbrella</h6>
    </div>

</body>

</html>
