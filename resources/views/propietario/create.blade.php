<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="p-5">
    
    <div class="col-4  container mt-5 card">
       <center>
        <h1>
            Registro Propietario
        </h1>
       </center>
        <form action="{{route('propietarios.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3 d-flex justify-content-center w100 mt-5">
              <label for="exampleInputEmail1" class="form-label">Cedula</label>
              <input type="text" class="form-control w-50 rounded-pill" name="cedula">
            </div>
            <div class="mb-3 d-flex justify-content-center w-100 mt-5">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control w-50 rounded-pill" name="telefono">
              </div>
              
              <div class="mb-3 d-flex justify-content-center w-100 mt-5">
                <button type="submit" class="btn btn-primary d-flex justify-content-center ">Registrar
                </button>
              </div>
           
            
          </form>
    </div>
</body>
</html>