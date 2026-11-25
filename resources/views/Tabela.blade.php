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
    {{ echo ($dados) ; }}
    <div class="table-responsive">
<table class="table md:table-stacked">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Default</th>
      <th scope="col">Description</th>
    </tr>

@foreach($dados as $d)
<tr>
    <td>{{ $d'nome' }}</td>
    <td>{{ $d'email' }}</td>
    <td>{{ $d'senha' }}</td>
    <td>{{ $d'nif' }}</td>
    <td>
        @if(isset($d['imagem']))
        <img src="{{ Storage::url($d['imagem']) }}"
        alt="Imagem" style="max-width: 100px; max-height: 100px">
        @endif
    </td>
    <td>{{  $d['nome'] }}</td>
    <td>{{  $d['email'] }}</td>
</tr>
</thead>
</tbody>
@endforeach

    <div class="row mt-3 justify-content-center d-flex">
        @foreach($dados as $d)
        <div class="col-3 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($d['imagem']) }}" class="card-iumg-top" alt="...">
            <div class="card-body">
            <h5 class="card-text">{{ @d['nome'] }}</h5>
            <p class="card-text">{{ @d['email'] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



</div>

</body>

</html>
