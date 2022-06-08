<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Project Laravel</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema de Posts</a>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" style="background-color: white;">Search</button>
            </form>
          </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <button class="btn btn-primary me-md-2" type="button">Novo Post</button>
        </div>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Conteudo</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <th>{{$item->title}}</th>
                        <td>{{$item->content}}</td>
                        <td>
                            <button type="button" id={{$item->id}} class="btn btn-primary">Editar</button>
                            <button type="button" id={{$item->id}} class="btn btn-danger">Deletar</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

<style>
    .create {
        text-align: center;
    }
</style>