<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

      <script src="{{asset('js/app.js')}}" defer></script>
      <link href="{{asset('css/app.js')}}" rel="stylesheet">

</head>
<body>
    <form action="{{url('controlador')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <form action="/action_page.php">

            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre">
            </div>
            <div class="form-group">
                <label for="Edad">Edad:</label>
                <input type="integer" name="Edad" id="Edad">
            </div>
            <div class="form-group">
                <label for="Direccion">Direccion:</label>
                <input type="text" name="Direccion" id="Direccion">
            </div>
            <div class="form-group">
                <label for="Foto">Foto:</label>
                <input type="file" name="Foto" id="Foto">
            </div>

        <button type="submit">ACEPTAR</button>

    </form>
</body>
</html>
