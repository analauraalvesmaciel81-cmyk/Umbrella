<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('fonte.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

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
        style="background-color: rgb(253, 1, 1); padding: -5rem; width: 26%; left:69%; top: -3rem; border-radius: 30px; border: 1px solid rgb(255, 0, 0);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="justify-content-center d-flex">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fonte" style="background-color: rgb(252, 252, 252);" aria-current="page"
                                href="#">Reserva professor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Reserva aluno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Calendário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>








    <br>

    <div class=" row d-flex justify-content-center gap-2">
        <div class="col-5  thumbnail border border-tertiary rounded p-4 mb-5 mt-4  bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Nome do professor</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Nome completo" aria-label="Nome completo">
                </div>
            </div>
        </div>
        <div class="col-5 rounded thumbnail border  border-tertiary rounded p-4 mb-5 mt-4 bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Matéria</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Matéria do professor"
                        aria-label="Matéria do professor">
                </div>
            </div>
        </div>
        <div class="col-5 rounded thumbnail border border-tertiary rounded p-4 mb-5 bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Horario Inicio</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Horário de início"
                        aria-label="Horário de início">
                </div>
            </div>
        </div>
        <div class="col-5 rounded thumbnail border border-tertiary rounded p-4 mb-5  bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Horario Fim</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Horário de fim" aria-label="Horário de fim">
                </div>
            </div>
        </div>
        <div class="col-5 rounded thumbnail border border-tertiary rounded p-4 mb-5  bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Data de utilização</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="00/00/0000" aria-label="Data de utilização">
                </div>
            </div>
        </div>
        <div class="col-5 rounded thumbnail border border-tertiary rounded p-4 mb-5  bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label">Turma</label>
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Nome da turma"
                        aria-label="Nome da turma">
                </div>
            </div>
        </div>
        <div class="container d-flex col-5 rounded thumbnail border border-tertiary rounded p-4 mb-5  bg-body-primary">
            <label for="exampleFormControlInput1" class="form-label"
                style="margin-right: 10px; margin-top: 20px;">Descrição</label>
            <div class="input-group">
                <span class="input-group-text">Objetivo <br>da aula</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: -20px; margin-bottom: 20px;">
        <button type="button" class="btn btn-outline-dark justify-content-center">Reservar</button>
    </div>
    <div class="justify-content-start d-flex" style="height: 40px; width: 150px;">
        <img src="logo_umbrella.png" class="img-thumbnail p-2" alt="...">
    </div>
    <div>
        <h6 class="fonte" style="margin-left: 43px; margin-top: -29px;">Umbrella</h6>
    </div>

</body>

</html>
