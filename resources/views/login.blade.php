<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    @vite('resources/js/login.js')

    <title>Document</title>
</head>

<body
    style="background-image: url('loginfundo.jpeg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container"> 
        <div class="col-8 border border-tertiary rounded p-4 mb-5 bg-body-primary"
            style="margin-left: 220px; margin-top: 50px; height: 600px; background-color: rgba(255, 255, 255, 0.9);">
            <div class="justify-content-center d-flex"
                style="margin-left:240px; margin-top:10px; height: 110px; width: 330px;">
                <img src="sesi.png" class="img-thumbnail" alt="...">
            </div>
            <h2 class="text-center" style="margin-top: 20px;">𝐁𝐈𝐁𝐋𝐈𝐎𝐓𝐄𝐂𝐀 𝐒𝐄𝐒𝐈</h2>
            <div style="margin-top: 110px;">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Informe seu email cadastrado.</div>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" aria-describedby="senhaHelp">
                </div>
                <button type="button" class="btn-outline-light" style="margin-left: 310px;" id="entrar">Entrar</button>
                <button class="btn-solid btn-styled theme-info">Esqueci a senha</button>
            </div>
        </div>
    </div>


</body>

</html>
