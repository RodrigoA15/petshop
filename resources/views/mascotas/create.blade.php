<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
     <center>
        <h3>
            Registro mascotas
        </h3>
     </center>
        <form action="{{route('mascotas.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Guacal</label>
                <input type="text" class="form-control" name="guacal">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <select name="propietario_id" id="propietario_id">
                    <option selected disabled>Seleccione una opcion</option>
                    @foreach ($propietario as $i)
                    <option value="{{$i->id}}">{{$i->cedula}}</option>
                    @endforeach
                </select>
              </div>

           
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>