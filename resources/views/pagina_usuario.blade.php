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
        style="background-color: rgb(253, 1, 1); padding: -5rem; width: 24%; left:70%; top: -3rem; border-radius: 30px; border: 1px solid rgb(255, 0, 0);">
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
                                aria-current="page" href="#">Professor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonte" style="color: white;" href="#">Aluno</a>
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
    <div class="justify-content-end d-flex" style="margin-right: 20px; margin-top: -105px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
            class="bi bi-person-circle" style="color: rgb(253, 1, 1);" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
    </div>
    <div class="container">
        <div class="form-field">
            <label for="exampleFormControlInput" class="form-label mb-2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
            <label for="exampleFormControlInput" class="form-label mb-2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
            <label for="exampleFormControlInput" class="form-label mb-2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
            <label for="exampleFormControlInput" class="form-label mb-2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
            <label for="exampleFormControlInput" class="form-label mb-2">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
            <div class="form-field">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <button class="btn-solid btn-styled theme-inverse" id="alterar">Inverse</button>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">xx</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
</table>
</body>

</html>
