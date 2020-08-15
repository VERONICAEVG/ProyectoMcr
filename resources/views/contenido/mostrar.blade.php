<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Id></th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Direccion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Edad}}</td>
                        <td>{{$item->Direccion}}</td>
                        <td>
                            <img src="{{ asset ('storage').'/'. $item->Foto}}" alt="" height="25%" width="25%">
                            {{$item->Foto}}</td>
                        <td>Editar|Eliminar</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{$datos->links()}}

</body>
</html>
