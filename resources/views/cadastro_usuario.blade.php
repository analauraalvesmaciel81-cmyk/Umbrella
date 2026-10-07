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
    <nav class="col-5 nav nav-pills" style="margin-top: -50px; margin-left: 1000px;">
        <a class="fonte nav-link active bg-primary" style="color: rgb(255, 255, 255)" aria-current="page" href="#">Inicio</a>
        <a class="fonte nav-link bg-danger" style="color: rgb(255, 255, 255)" href="#">Reserva aluno</a>
        <a class="fonte nav-link bg-danger" style="color: rgb(255, 255, 255)"href="#">Reserva professor</a>
        <a class="fonte nav-link bg-danger"style="color: rgb(255, 255, 255)" href="#">Calendário</a>
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
                    <input type="text" class="form-control" placeholder="Nome da turma" aria-label="Nome da turma">
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
