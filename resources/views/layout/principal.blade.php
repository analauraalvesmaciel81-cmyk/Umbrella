<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="justify-content-start d-flex" style="margin-left:10px; margin-top:10px; height: 70px; width: 180px;">
        @yield('content')
        <img src="sesi.png" class="img-thumbnail" alt="...">
    </div>
    <div style="margin-left:200px; margin-top:-75px; height:20; width:600;">
        <img src="redred.jpg" class="img-thumbnail-danger" alt="...">
    </div>
    <div> 
        <h6 style="margin-left: 210px; margin-top: -60px;">SERVIÇO SOCIAL <br>DA INDÚTRIA</h6>
    </div>

</body>

</html>
